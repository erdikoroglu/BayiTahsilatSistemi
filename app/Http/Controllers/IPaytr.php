<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;

interface IPaytr
{
    public const merchant_id = "302363";
    public const merchant_key = "2CeSZTE6e7i9GgMr";
    public const merchant_salt = "AhPfEoib8hdf1ZbT";
    public const currency = "TL";
    public const test_mode = 1;
    public const non_3d = 0;
    public const payment_type = "card";
    public const client_lang = "tr";
    public const debug_on  = 0;
    public const post_url = "https://www.paytr.com/odeme";
    public const bin_url = "https://www.paytr.com/odeme/api/bin-detail";
    
    public function getMerchantOkUrl(Process $process);
    public function getMerchantFailUrl(Process $process);
    public function getCardBin($cardNumber);
    public function getToken(Request $request, Process $process);
    public function getHashStr(Request $request, Process $process);
    public function postData(Request $request, Process $process);
    public function isInstallment(Process $process);
    public function getCardNumber(Request $request);
    public function getBasket(Request $request);
}
