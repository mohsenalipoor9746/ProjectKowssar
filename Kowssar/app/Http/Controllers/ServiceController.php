<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function ViewService()
    {
        $Service=Service::get();
        return view('/Service/ViewService',compact('Service'));

    }
    public function AddService(Request $request)
    {
        $request=Service::create([
            'NameService'=>$request['NameService'],
            'ShortName'=>$request['ShortName'],
            'InternationalCode'=>$request['InternationalCode'],
            'CodeInTheOrganization'=>$request['CodeInTheOrganization'],
            'Price'=>$request['Price'],

        ]);
        session()->flash('alert','مشخصات سرویس جدید ثبت شد');
        return redirect()->back();

    }
}
