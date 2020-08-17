@extends('master')

@section('content')

<div class="container">
  <div class="row">
    <div class="panel panel-group">
      <form class="navbar-form" role="Search">
      <label>Seleccione un año: </label>
        <div class="form-group">
          <select class="form-control" name="anio">           
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>   
            <option value="2021">2022</option>                 
          </select>
        </div>
        <button type="submit" class="btn btn-success">Generar reporte</button>
        <input type="button" class="btn btn-default" name="imprimir" value="Imprimir" onclick="window.print();">
      </form>
    <!-- REPORTE RECIBOS -->
    <div class="panel panel-primary">
      <div class="panel-heading">Reporte Totales Ingresos para el {{ $anio }}</div>
      <div class="panel-body">

        <table class="table">
          <thead>
            <tr>
              <th scope="col">{{ $anio }}</th>
              <th scope="col">D. de Registro</th>
              <th scope="col">Gtos Impresión</th>
              <th scope="col">Gtos Envío</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">ENERO</th>
              <td>$ {{ $totalRegistro1 }}</td>
              <td>$ {{ $totalImpresion1 }}</td>
              <td>$ {{ $totalEnvio1 }}</td>
            </tr>
            <tr>
              <th scope="row">FEBRERO</th>
              <td>$ {{ $totalRegistro2 }}</td>
              <td>$ {{ $totalImpresion2 }}</td>
              <td>$ {{ $totalEnvio2 }}</td>
            </tr>
            <tr>
              <th scope="row">MARZO</th>
              <td>$ {{ $totalRegistro3 }}</td>
              <td>$ {{ $totalImpresion3 }}</td>
              <td>$ {{ $totalEnvio3 }}</td>
            </tr>
            <tr>
              <th scope="row">ABRIL</th>
              <td>$ {{ $totalRegistro4 }}</td>
              <td>$ {{ $totalImpresion4 }}</td>
              <td>$ {{ $totalEnvio4 }}</td>
            </tr>
            <tr>
              <th scope="row">MAYO</th>
              <td>$ {{ $totalRegistro5 }}</td>
              <td>$ {{ $totalImpresion5 }}</td>
              <td>$ {{ $totalEnvio5 }}</td>
            </tr>
            <tr>
              <th scope="row">JUNIO</th>
              <td>$ {{ $totalRegistro6 }}</td>
              <td>$ {{ $totalImpresion6 }}</td>
              <td>$ {{ $totalEnvio6 }}</td>
            </tr>
            <tr>
              <th scope="row">JULIO</th>
              <td>$ {{ $totalRegistro7 }}</td>
              <td>$ {{ $totalImpresion7 }}</td>
              <td>$ {{ $totalEnvio7 }}</td>
            </tr>
            <tr>
              <th scope="row">AGOSTO</th>
              <td>$ {{ $totalRegistro8 }}</td>
              <td>$ {{ $totalImpresion8 }}</td>
              <td>$ {{ $totalEnvio8 }}</td>
            </tr>
            <tr>
              <th scope="row">SEPTIEMBRE</th>
              <td>$ {{ $totalRegistro9 }}</td>
              <td>$ {{ $totalImpresion9 }}</td>
              <td>${{ $totalEnvio9 }}</td>
            </tr>
            <tr>
              <th scope="row">OCTUBRE</th>
              <td>$ {{ $totalRegistro10 }}</td>
              <td>${{ $totalImpresion10 }}</td>
              <td>${{ $totalEnvio10 }}</td>
            </tr>
            <tr>
              <th scope="row">NOVIEMBRE</th>
              <td>$ {{ $totalRegistro11 }}</td>
              <td>${{ $totalImpresion11 }}</td>
              <td>${{ $totalEnvio11 }}</td>
            </tr>
            <tr>
              <th scope="row">DICIEMBRE</th>
              <td>$ {{ $totalRegistro12 }}</td>
              <td>${{ $totalImpresion12 }}</td>
              <td>${{ $totalEnvio12 }}</td>
            </tr>
            <tr>
              <th scope="row"><dt>TOTAL</dt></th>
              <td><dt>$ {{ $totalRegistro }}</dt></td>
              <td><dt>$ {{ $totalImpresion }}</dt></td>
              <td><dt>$ {{ $totalEnvio }}</dt></td>
            </tr>
          </tbody>
        </table>

        </div>
    </div>
    </div>    
  </div>
</div>

@endsection