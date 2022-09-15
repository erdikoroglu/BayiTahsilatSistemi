<?php

namespace App\Http\Controllers;

use App\Models\Process;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProcessController extends Controller
{

    public function pending(Request $request)
    {
        if ($request->ajax()) {
            if ($request->user()->admin)
                return DataTables::of(Process::query()->where('status', 1)->get())
                    ->editColumn('company_name', function (Process $process) {
                        return $process->company->company_name  . '(<small>' . $process->company_name . '</small>)';
                    })
                    ->editColumn('status', function (Process $process) {
                        return "Yarıda Kalmış";
                    })
                    ->editColumn('updated_at', function (Process $process) {
                        return $process->created_at->format('d.m.y H:i');
                    })
                    ->rawColumns(["company_name"])
                    ->make(true);
            else
                return DataTables::of(Process::query()->where('users_id', $request->user()->id)->where('status', 1)->get())
                    ->editColumn('status', function (Process $process) {
                        return "Yarıda Kalmış";
                    })
                    ->editColumn('updated_at', function (Process $process) {
                        return $process->created_at->format('d.m.y H:i');
                    })
                    ->make(true);
        }
        return view('process.pending');
    }

    public function success(Request $request)
    {
        if ($request->ajax()) {
            if ($request->user()->admin)
                return DataTables::of(Process::query()->where('status', 2)->get())
                    ->editColumn('company_name', function (Process $process) {
                        return $process->company->company_name  . '(<small>' . $process->company_name . '</small>)';
                    })
                    ->editColumn('status', function (Process $process) {
                        return "Başarılı";
                    })
                    ->editColumn('updated_at', function (Process $process) {
                        return $process->created_at->format('d.m.y H:i');
                    })
                    ->rawColumns(["company_name"])
                    ->make(true);
            else
                return DataTables::of(Process::query()->where('users_id', $request->user()->id)->where('status', 2)->get())
                    ->editColumn('status', function (Process $process) {
                        return "Tamamlanmış";
                    })
                    ->editColumn('updated_at', function (Process $process) {
                        return $process->created_at->format('d.m.y H:i');
                    })
                    ->make(true);
        }
        return view('process.success');
    }

    public function fail(Request $request)
    {

        if ($request->ajax()) {
            if ($request->user()->admin)
                return DataTables::of(Process::query()->where('status', 3)->get())
                    ->editColumn('company_name', function (Process $process) {
                        return $process->company->company_name  . '(<small>' . $process->company_name . '</small>)';
                    })
                    ->editColumn('status', function (Process $process) {
                        return "Başarısız";
                    })
                    ->editColumn('updated_at', function (Process $process) {
                        return $process->created_at->format('d.m.y H:i');
                    })
                    ->rawColumns(["company_name"])
                    ->make(true);
            else
                return DataTables::of(Process::query()->where('users_id', $request->user()->id)->where('status', 3)->get())
                    ->editColumn('status', function (Process $process) {
                        return "Başarısız";
                    })
                    ->editColumn('updated_at', function (Process $process) {
                        return $process->created_at->format('d.m.y H:i');
                    })
                    ->make(true);
        }
        return view('process.fail');
    }

}
