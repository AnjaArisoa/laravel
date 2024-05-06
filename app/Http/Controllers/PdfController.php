<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function traitement_pdf(Request $request){
        $data = [
            'title' => 'test',
            'name' => 'name'
        ];

        $pdf = Pdf::loadView('template.pagepdf', $data);
        return $pdf->download('nom.pdf');
    }
}
