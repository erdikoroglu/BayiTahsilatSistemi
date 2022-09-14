<?php

namespace App\Http\Controllers;

use App\Models\Process;
use App\Models\User;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class FrontController extends Controller
{
    public function index(User $user)
    {
        return view('welcome',compact('user'));
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
        $process->uuid = Uuid::uuid4();
        $process->save();

        return view('paymentDetail',compact('process','user'));
    }
}
