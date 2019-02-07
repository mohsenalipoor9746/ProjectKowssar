<?php

namespace App\Http\Controllers;

use App\Patient;
use Illuminate\Http\Request;

class MedicalDocumentsController extends Controller
{
    public function ViewTableMedicalDocuments()
    {
        $show=Patient::get();
        return view('/MedicalDocuments/ViewTableMedicalDocuments',compact('show'));

    }
}
