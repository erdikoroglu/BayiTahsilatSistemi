<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class Pay implements IPaytr
{

    public function getMerchantOkUrl(Process $process)
    {
        return "https://pay.ankamuh.com/success/" . $process->uuid;
    }

    public function getMerchantFailUrl(Process $process)
    {
        return "https://pay.ankamuh.com/fail/" . $process->uuid;
    }

    public function getCardBin($cardNumber)
    {
        $hash_str = Str::limit(Str::replace(' ','',$cardNumber),8,'') . self::merchant_id . self::merchant_salt;
        $paytr_token = base64_encode(hash_hmac('sha256', $hash_str, self::merchant_key, true));
        $post_vals = array(
            'merchant_id' => self::merchant_id,
            'bin_number' => Str::limit(Str::replace(' ','',$cardNumber),8,''),
            'paytr_token' => $paytr_token
        );

        $request = Http::asForm()->post(self::bin_url,$post_vals)->body();
        $type = json_decode($request,true);
        if (!isset($type["brand"]))
            return $type["brand"] = null;
        return $type["brand"];
    }

    public function getToken(Request $request, Process $process) : string
    {
        return base64_encode(
            hash_hmac(
                'sha256',
                $this->getHashStr($request,$process).self::merchant_salt
                ,self::merchant_key
                ,true
            )
        );
    }

    public function getHashStr(Request $request, Process $process) : string
    {
        return self::merchant_id
            . $request->ip()
            . $process->uuid
            . $process->email
            . $process->amount
            . self::payment_type
            . $this->isInstallment($process)
            . self::currency
            . self::test_mode
            . self::non_3d;
    }

    public function postData(Request $request, Process $process) : array
    {
        return [
            'cc_owner' => $request->post('cc_owner'),
            'card_number' => $this->getCardNumber($request),
            'expiry_month' => $request->post('expiry_month'),
            'expiry_year' => $request->post('expiry_year'),
            'cvv' => $request->post('cvv'),
            'merchant_id' => self::merchant_id,
            'user_ip' => $request->ip(),
            'merchant_oid' => $process->uuid,
            'email' => $process->email,
            'payment_type' => self::payment_type,
            'payment_amount' => floatval($process->amount),
            'currency' => self::currency,
            'test_mode' => self::test_mode,
            'non_3d' => self::non_3d,
            'merchant_ok_url' => $this->getMerchantOkUrl($process),
            'merchant_fail_url' => $this->getMerchantFailUrl($process),
            'user_name' => $process->name,
            'user_address' => $process->company->address,
            'user_phone' => $process->phone,
            'user_basket' => $this->getBasket($request),
            'debug_on' => self::debug_on,
            'client_lang' => self::client_lang,
            'paytr_token' => $this->getToken($request,$process),
            'non3d_test_failed' => 0,
            'installment_count' => $this->isInstallment($process),
            'card_type' => $this->getCardBin($request->post('card_number'))
        ];
    }

    public function isInstallment(Process $process)
    {
        if ($process->company->installment)
            return 4;
        else
            return 0;
    }

    public function getCardNumber(Request $request)
    {
        return Str::replace(' ','',$request->post('card_number'));
    }

    public function getBasket(Request $request)
    {
        return htmlentities(json_encode(array(
            array("Cari Hesaba Mahsuben", $request->post('amount'), 1)
        )));
    }

}
