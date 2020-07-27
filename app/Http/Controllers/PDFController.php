<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    public function generatePDF(){
        $data = [
            'bangla' => 'বাংলা  পি ডি এফ',
            'english' => 'Hello World'
        ];
        $pdf = PDF::loadView('pdf', compact( 'data'));
        return $pdf->stream('document.pdf');
    }

    public function downloadPDF(){
        $data = [
            'bangla' => 'বাংলা  পি ডি এফ',
            'english' => 'Hello World'
        ];
        $pdf = PDF::loadView('pdf', compact( 'data'));
        $pdf->download('document.pdf');
    }
}
