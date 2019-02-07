<?php

namespace App\Http\Controllers;

use App\Insurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function ViewInsurance()
    {
        $insurance=Insurance::get();
        return view('/Insurance/ViewInsurances',compact('insurance'));

    }
    public function AddInsurance(Request $request)
    {
        $request=Insurance::create([
            'NameOfInsurance'=>$request['NameOfInsurance'],
            'InsuranceCode'=>$request['InsuranceCode'],
            'NameOfOrganization'=>$request['NameOfOrganization'],
            'InsurancePercentage'=>$request['InsurancePercentage'],
            'KindOfInsurance'=>$request['KindOfInsurance'],
        ]);
        session()->flash('alert','مشخصات بیمه جدید ثبت شد');
        return redirect()->back();

    }
}
