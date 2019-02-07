<?php

namespace App\Http\Controllers;

use App\Insurance;
use App\Patient;
use App\Service;
use App\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function ViewPatients()
    {
        $service = Service::get();
        $insurance = Insurance::get();
        $user = User::get();
        $patient = Patient::get();
        return view('/Patients/ViewPatients', compact('patient', 'user', 'insurance', 'service'));
    }

    public function AddPatient(Request $request)
    {
        $file = $request->file('AttachedFile');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $data = $request->file('AttachedFile')->move("UploadAttachedFile", $name);


        $request = Patient::create([
            'FullName' => $request['FullName'],
            'FileNumber' => $request['FileNumber'],
            'PhoneNumber' => $request['PhoneNumber'],
            'NationalCode' => $request['NationalCode'],
            'Insurance' => $request['Insurance'],
            'Service' => $request['Service'],
            'ReferralPhysician' => $request['ReferralPhysician'],
            'ReportDoctor' => $request['ReportDoctor'],
            'AttachedFile' => $data,
            'Amount' => ($request['Service'] * $request['Insurance']) / 100,

        ]);
        session()->flash('alert', 'مشخصات بیمار جدید ثبت شد');
        return redirect()->back();
    }

    public function removePatient(Patient $patient)
    {
        $patient->delete();
        return redirect()->back();
    }

    public function ViewUpdatePatient(Patient $patient)
    {

        $service = Service::get();
        $insurance = Insurance::get();
        $user = User::get();

return view('/Patients/UpdatePatients',compact('patient', 'user', 'insurance', 'service'));

    }
    public function UpdatePatient(Patient $patient,Request $request)
    {
        $file = $request->file('AttachedFile');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $data = $request->file('AttachedFile')->move("UploadAttachedFile", $name);



        $patient->update([
            'FullName' => $request['FullName'],
            'FileNumber' => $request['FileNumber'],
            'PhoneNumber' => $request['PhoneNumber'],
            'NationalCode' => $request['NationalCode'],
            'Insurance' => $request['Insurance'],
            'Service' => $request['Service'],
            'ReferralPhysician' => $request['ReferralPhysician'],
            'ReportDoctor' => $request['ReportDoctor'],
            'AttachedFile' => $data,
        ]);
        session()->flash('alert','مشخصات بیمار به بخش صندوق ارسال شد');
        return redirect()->back();

    }


}
