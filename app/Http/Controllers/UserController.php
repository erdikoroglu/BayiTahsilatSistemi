<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Log;
use Ramsey\Uuid\Uuid;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(Request $request)
    {
        if ($request->ajax())
            return DataTables::of(User::query())
                ->editColumn('installment',function (User $user){
                    if ($user->installment)
                        return "Aktif";
                    return "Kapalı";
                })
                ->addColumn('link',function (User $user){
                    $onclick = 'onclick="clipboard(' . $user->id . ')"';
                    $html = '<span '.$onclick.' class="btn btn-light-dark" id="link_'.$user->id.'">Kopyala</span>';
                    $html .= '<input class="d-none" id="link_val_' . $user->id .'" value="'. url('/' . $user->uuid) .'" />';
                    return $html;
                })
                ->addColumn('action',function (User $user){
                    return  '<a href="'.route('admin.users.edit',$user).'" class="btn btn-light-primary">Düzenle</a>';
                })
                ->rawColumns(['link','action'])
                ->make(true);
        return \view('backend.companies.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('backend.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'tax_number' => 'required|unique:users',
            'logo_code' => 'required|unique:users',
            'company_name' => 'required',
        ]);

        $data = $request->except('_token');
        $data["uuid"] = Uuid::uuid4();
        $user = new User($data);
        try {
            $user->save();
            return redirect()->route('admin.users.index')->with('success','Yeni Cari Eklendi')->send();
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error','Bir Hata Oluştu');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return Response
     */
    public function edit(User $user)
    {
        return \view('backend.companies.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param User $user
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->except('_token','password');
        if ($request->post('password'))
            $data["password"] = bcrypt($request->post('password'));

        try {
            $user->update($data);
            return redirect()->route('admin.users.index')->with('success','Cari Güncellendi');
        } catch (\Exception $exception) {
            Log::error($exception->getMessage());
            return back()->with('error','Bir Hata Oluştu');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return Response
     */
    public function destroy(User $user)
    {
        //
    }
}
