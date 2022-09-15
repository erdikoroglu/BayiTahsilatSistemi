<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $crediantals = $request->only('tax_number','password');
        if (\Auth::attempt($crediantals))
            return redirect()->route('admin.users.index');
        else
            return back();
    }

    public function logout()
    {
        if (\Auth::check())
        {
            \Auth::logout();;
            return redirect()->route('login');
        }

        return back();

    }
}
