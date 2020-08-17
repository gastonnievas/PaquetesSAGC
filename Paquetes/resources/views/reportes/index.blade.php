@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif
<div class="row">
  	<div class="col-sm-3"></div>
  	<div class="col-sm-6">
  		<h1 align="center">Listado de Reportes</h1>
	  	<table class="table table-hover">
			<tr>
				<td><a href="{{ route('reporte1.index') }}" type="button" class="btn btn-success btn-lg btn-block">Reporte Totales Recibos</a></td>
			</tr><!-- <br> -->		
			<tr>
				<td><a href="{{ route('reporte2.index') }}" type="button" class="btn btn-success btn-lg btn-block">Reporte Mensual Recibos</a></td>
			</tr><!-- <br> -->
			<tr>
				<td><a href="{{ route('reporte6.index') }}" type="button" class="btn btn-success btn-lg btn-block">Reporte Anual Ingresos</a></td>
			</tr><!-- <br> -->
			<tr>
				<td><a href="{{ route('reporte3.index') }}" type="button" class="btn btn-primary btn-lg btn-block">Reporte Totales Paquetes</a></td>
			</tr><!-- <br> -->
			<tr>
				<td><a href="{{ route('reporte4.index') }}" type="button" class="btn btn-primary btn-lg btn-block">Reportes Mensual Paquetes</a></td>
			</tr><!-- <br> -->	
			<tr>
				<td><a href="{{ route('reporte5.index') }}" type="button" class="btn btn-danger btn-lg btn-block">Reporte Totales Generales</a></td>
			</tr>
		</table>
	</div>
  	<div class="col-sm-3"></div>
</div>




@endsection