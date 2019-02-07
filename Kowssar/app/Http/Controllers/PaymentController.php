<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment(Patient $patient)
    {
        $Paid='icon/check.png';

        $patient->update([
            'PaymentStatus'=>$Paid,
        ]);
        session()->flash('alert','مشخصات بیمار به بخش صندوق ارسال شد');
        return redirect()->back();

    }

}
