<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    //
    public function index()
    {
//        return view('pdf');
        $pdf = PDF::loadView('pdf');;
        return $pdf->stream();
    }
}
