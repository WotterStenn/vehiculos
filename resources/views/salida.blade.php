<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ENTRADA Y SALIDA DE VEHÍCULOS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 20px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
        <div>
        <a href="{{route('vehiculos')}}">Volver al inicio </a>

        <a href="{{ url('/salida')}}">Registrar Salida de Vehículos</a>

        <a href="{{ url('/reporte')}}">Generar Reporte</a>

        <br>
        <div>
        <h1> Registar Hora de Salida de Vehículos</h1>
                <br>

                @foreach ($registros as $registro)

        <form method="POST" action="{{ route('salida.update', $registro->id) }}">

                @csrf
                @method('put')


                Placas del vehículo: <label>{{$registro->placas}}</label>

                <br>
                Fecha de Ingreso: <label>{{$registro->fecha}}</label>
                <br>
                
                Hora de Entrada:
                <label>{{$registro->hora_entrada}} </label>                
                <br>
                Tipo de vehículo: 
                {{$registro->clasificacion}}
                <br>

                Hora de Salida:
                <input type="time" name="hora_salida" value="{{$horaActual}}" step="1"></input>

                <br>                <br>



	            <input type="submit" value="REGISTRAR HORA DE SALIDA"> 
                </form>



                <br>
                <br>
                @endforeach
               



                </div>
            

            <div class="content">
                <div class="title m-b-md">
                    Hola desde la vista
                </div>

                <div class="links">
                </div>
            </div>
        </div>
    </body>
</html>
