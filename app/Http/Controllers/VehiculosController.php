<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;
use App\Registro;


class VehiculosController extends Controller
{
    
    public function index(){

        date_default_timezone_set('America/Mexico_City');  
        $fechaActual= date('d-m-y');
        $horaActual = date('h:i:s a', time());

        $tipos = Tipo::all();


      
        // $tipo = Tipo::select('clasificacion')
        // ->get();

        //  foreach ($tipo as $user)
        //  {
        //      $user->value('clasificacion');
        //  }
        
        // foreach ($flights as $flight) {
        //     echo $flight->name;
        // }

        return view('welcome', ['horaActual'=>$horaActual, 'fechaActual' => $fechaActual, 'tipos' => $tipos]);

    }

    public function store(Request $request)
    {
        date_default_timezone_set('America/Mexico_City');  
        $fechaActual= date('d-m-y');
        $horaActual = date('h:i:s a', time());
        $tipos = Tipo::all();


        $registro = new Registro();
        $registro->placas= $request->placas;
        $registro->hora_entrada= $request->hora_entrada;
        $registro->fecha=$fechaActual;
        $registro->clasificacion= $request->clasificacion;
        
        
        $registro->save();

        return view('welcome',['horaActual'=>$horaActual, 'fechaActual' => $fechaActual, 'tipos' => $tipos]);


    }

}
