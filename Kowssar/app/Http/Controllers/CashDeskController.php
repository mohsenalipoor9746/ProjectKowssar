<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class CashDeskController extends Controller
{
    public function ViewCashDesk()
    {
        $patient=Patient::get();
        return view('/CashDesk/ViewCashDesk',compact('patient'));

    }
    public function home()
    {
        return view('/auth/login');
    }
}
