<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class DocumentDownloadController extends Controller
{
    public function generateEnglishPDF()
    {
        $data = ['title' => 'domPDF in Laravel 10'];
        $pdf = PDF::loadview('pdf.english', $data);
        return $pdf->download('document.pdf');
        // return view('pdf.english', $data);
    }
    public function generateLugandaPDF()
    {
        $data = ['title' => 'domPDF in Laravel 10'];
        $pdf = PDF::loadview('pdf.luganda', $data);
        return $pdf->download('document.pdf');
        // return view('pdf.luganda', $data);
    }
}
