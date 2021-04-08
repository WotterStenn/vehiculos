<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;


class ReporteController extends Controller
{
    public function index()
    {


        $registros= Registro::all();
         $gatito=222222222222;
         
         return view('reporte', ['gatito'=>$gatito, 'registros'=>$registros]);

        
    }
}
