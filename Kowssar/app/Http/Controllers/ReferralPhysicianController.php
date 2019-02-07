<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class ReferralPhysicianController extends Controller
{
    public function ViewTableReferralPhysician()
    {
        $show=Patient::get();
        return view('/ReferralPhysician/ViewTableReferralPhysician',compact('show'));

    }

    public function ViewAddReferralPhysician(Patient $patient)
    {

        return view('/ReferralPhysician/ViewAddReferralPhysician',compact('patient'));

    }

    public function AddReferralPhysician(Patient $patient , Request $request)
    {
        $file = $request->file('FileFinal');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $FileFinal=$request->file('FileFinal')->move("FileFinal", $name);
        $patient->update([
            'FileFinal'=>$FileFinal,
        ]);
        session()->flash('alert', 'نظر شما ثبت شد و در اسناد پزشکی موسسه ذخیره شد');
        return redirect()->action('ReferralPhysicianController@ViewTableReferralPhysician');
    }
}
