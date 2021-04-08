<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


@section('content')

<head>
    <meta charset="UTF-8">
    <title> BITÁCORA DE ENTRADA Y SALIDA DE VEHÍCULOS</title>

</head>
<body>
    <div class="container">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Placas</th>
      <th scope="col">Clasificacion</th>
      <th scope="col">Fecha</th>
      <th scope="col">Hora de Entrada</th>
      <th scope="col">Hora de Salida</th>
      <th scope="col">Tiempo total de estancia</th>
      <th scope="col">Cobro realizado (MXN) </th>

    </tr>
  </thead>
  <tbody>
    @foreach($registros as $registro)
    <tr>
      <th scope="row">{{$registro->id}}</th>
      <td>{{$registro->placas}}</td>
      <td>{{$registro->clasificacion}}</td>
      <td>{{$registro->fecha}}</td>
      <td>{{$registro->hora_entrada}}</td>
      <td>{{$registro->hora_salida}}</td>
      <td>{{$registro->tiempo_total}} minutos</td>
      <td>{{$registro->cobro}} pesos</td>



    </tr>
    @endforeach
    
  </tbody>
</table>
    </div>

    <div class="container">

        <a href="{{route('descargarPDF')}}" target="_blank" class="btn btn-sm btn-primary">Generar PDF </a>

        <a href="{{route('vehiculos')}}"  class="btn btn-sm btn-primary">Volver al inicio </a>

        

    </div>
</body>
</html>
