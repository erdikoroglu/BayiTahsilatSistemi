<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile()
    {
        return view('backend.profile');
    }

    public function updateProfile(Request $request, User $user)
    {
        $request->validate([
            'pay_logo' => 'image|mimes:jpg,png,gif,svg',
            'receipt_logo' => 'image|mimes:jpg,png,gif,svg',
        ]);
        $name = Str::slug($user->company_name);
        if ($request->hasFile('pay_logo'))
            $user->pay_logo = Storage::putFileAs('public/media/logo',$request->file('pay_logo'),$name . '-pay-logo.' . $request->file('pay_logo')->getClientOriginalExtension());
        if ($request->hasFile('receipt_logo'))
            $user->receipt_logo = Storage::putFileAs('public/media/logo',$request->file('receipt_logo'),$name . '-receipt-logo.' . $request->file('receipt_logo')->getClientOriginalExtension());
        $user->save();
        return back()->with('success','Profiliniz Güncellendi');
    }
}
