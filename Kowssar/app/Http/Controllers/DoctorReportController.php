<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class DoctorReportController extends Controller
{
    public function ViewTableDoctorReport()
    {
        $show=Patient::get();
        return view('/DoctorReport/ViewTableDoctorReport',compact('show'));

    }

    public function ViewAddDoctorReport(Patient $patient )
    {
        return view('/DoctorReport/ViewAddDoctorReport',compact('patient'));

    }

    public function AddReport(Patient $patient , Request $request)
    {
        $file = $request->file('PaksFile');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $PaksFile=$request->file('PaksFile')->move("PaksFile", $name);
        $file = $request->file('VersionFile');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $VersionFile=$request->file('VersionFile')->move("VersionFile", $name);

        $patient->update([
            'PaksFile'=>$PaksFile,
            'VersionFile'=>$VersionFile,
        ]);
        session()->flash('alert','نظر شما ثبت شد و برای پزشک ارجاع ارسال شد');
        return redirect()->action('DoctorReportController@ViewTableDoctorReport');


    }
}
