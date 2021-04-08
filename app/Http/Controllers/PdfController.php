<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use App\Registro;

class PdfController extends Controller
{   
    public function PDF(){


        $registros= Registro::all();

         $pdf = \PDF::loadView('reporte', ['registros'=>$registros]);
        
        return $pdf->stream('prueba.pdf');
    //return view('reporte',['gatito'=>$gatito, 'registros'=>$registros]);

    }

    
}
