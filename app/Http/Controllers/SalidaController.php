<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;
use App\Tipo;



class SalidaController extends Controller
{
    
    public function index(){
        date_default_timezone_set('America/Mexico_City');  
        $horaActual = date('h:i:s a', time());



        $registros = Registro::whereNull('hora_salida')->get();
        //$registros= Registro::all();

     

        return view('salida',  ['registros' => $registros,'horaActual' => $horaActual]);

    }

    public function update(Registro $id, Request $request){


        date_default_timezone_set('America/Mexico_City');  
        $fechaActual= date('d-m-y');
        $horaActual = date('h:i:s a', time());
        $tipos = Tipo::all();


        $id->hora_salida = $request -> hora_salida;

        $hora_salida = $id->hora_salida;
        $hora_entrada= $id->hora_entrada;

        $hora_s = intval(substr($hora_salida, 0, 2));
        $hora_e = intval(substr($hora_entrada, 0, 2));

        $min_s = intval(substr($hora_salida, 3, 4));
        $min_e = intval(substr($hora_entrada, 3,4));

        $seg_s = intval(substr($hora_salida, 6, 7));
        $seg_e = intval(substr($hora_entrada, 6, 7));


        $dif_horas=($hora_s-$hora_e)*60;
        $dif_min=($min_s-$min_e);
        $seg_min=($seg_s+$seg_e)/60;

        $tiempoTotal=round(($dif_horas+$dif_min+$seg_min));

        $clasificacion=$id->clasificacion;

        $tarifa = intval(Tipo::where('clasificacion', $clasificacion) -> value('tarifa'));

        $cobro=round($tiempoTotal*$tarifa);

        $id->tiempo_total = $tiempoTotal;
        $id->cobro = $cobro;

        $id->save();
        
        return view('welcome',['horaActual'=>$horaActual, 'fechaActual' => $fechaActual, 'tipos' => $tipos]);







    }

}
