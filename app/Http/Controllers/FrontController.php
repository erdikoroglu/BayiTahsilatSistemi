<?php

namespace App\Http\Controllers;

use App\Mail\AnkaSuccess;
use App\Mail\UserSuccess;
use App\Models\Process;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\View;


class FrontController extends Controller
{
    public function index(User $user)
    {
        return view('pay.step1',compact('user'));
    }

    public function paymentDetail(User $user, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company_name' => 'required',
            'tax_number' => 'required|min:10|max:11',
            'phone' => 'required|min:10|max:14',
            'email' => 'required|email'
        ],[
            'name.required' => 'İsim Alanının doldurulması zorunludur',
            'company_name.required' => 'Şirket Adı Alanının doldurulması zorunludur',
            'tax_number.required' => 'Vergi Numarası Alanının doldurulması zorunludur',
            'tax_number.min' => 'Vergi Numarası en az 10 karakter olmalıdır',
            'tax_number.max' => 'Vergi Numarası en fazla 11 karakter olmalıdır',
            'phone.max' => 'Telefon Numarası en fazla 14 karakter olmalıdır',
            'phone.min' => 'Telefon Numarası en az 10 karakter olmalıdır',
            'phone.required' => 'Telefon Numarası girilmesi zorunludur',
            'email.required' => 'E-Posta adresi girilmesi zorunludur',
            'email.email' => 'E-Posta adresi kısmına geçerli bir eposta adresi yazmanız gerekir.',
        ]);

        $process = new Process();
        $process->name = $request->post('name');
        $process->email = $request->post('email');
        $process->phone = $request->post('phone');
        $process->tax_number = $request->post('tax_number');
        $process->company_name = $request->post('company_name');
        $process->amount = 0.0;
        $process->status = 1;
        $process->users_id = $user->id;
        $process->uuid = time();
        $process->save();
        return view('pay.step2',compact('process','user'));
    }

    public function pay(Request $request, Process $process)
    {
        $process->amount = $request->post('amount');
        $process->save();

        $pay = new Pay();
        $data = $pay->postData($request,$process);

        $error = null;
        if ($data["card_type"] == null) {
            $data["card_type"] = "bonus";
            $data["installment_count"] = "0";
            $error = "Girdiğiniz kart numarası tanınamadığı için taksitli çekim yapamazsınız. Kart bilgileriniz doğru ise tek çekim olarak işlem yapılacaktır";
        }
        $user = $process->company;

       return view('pay.step3',compact('pay','data','user','process'))->with('error',$error);
    }

    public function fail(Request $request, Process $process)
    {
        $process->status = 3;
        $process->save();
        return redirect()->route('step1',$process->company->uuid)->with('error',$request->fail_message);
    }

    public function success(Request $request, Process $process)
    {
        $process->status = 2;
        $process->save();
        $user = $process->company;
        return view('paymentDetail',compact('process','user'));
    }

    public function pdf(Process $process)
    {
        View::share('process',$process);
        $pdf = PDF::loadView('pay.pdf',$process);
        $pdf->setPaper('A5');
        return $pdf->inline($process->uuid . '-tahsilat_makbuzu.pdf');
    }

    public function result(Request $request)
    {

        $pay = new Pay();
        $hash = base64_encode( hash_hmac('sha256',
            $request["merchant_oid"]
            .$pay::merchant_salt
            .$request["status"]
            .$request["total_amount"],
            $pay::merchant_key,
            true)
        );

        $process = Process::where('uuid',$request["merchant_oid"])->first();

        if($hash != $request["hash"])
            die('Bankadan gelen cevap ile sistemlerimizdeki kayı uyuşmuyor. Lütfen tahsilat yetkiliniz ile görüşün');

        if ($request["status"] == "success")
        {
            if ($process->company->id != 1)
                Mail::send(new UserSuccess($process));

            Mail::send(new AnkaSuccess($process));
            $process->status = 2;
        } else {
            $process->status = 3;
        }
        echo "OK";

        $process->save();

    }
}
