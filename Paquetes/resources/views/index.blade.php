@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif

<table class="table table-hover">
	<tr>
		<td><a href="{{ route('paquetes.create') }}" type="button" class="btn btn-primary btn-lg btn-block">Cargar Paquete</a></td>
	</tr><!-- <br> -->		
	<tr>
		<td><a href="{{ route('recibos.create') }}" type="button" class="btn btn-success btn-lg btn-block">Cargar Recibo</a></td>
	</tr><!-- <br> -->
	<tr>
		<td><a href="{{ route('personas.create') }}" type="button" class="btn btn-warning btn-lg btn-block">Cargar Persona</a></td>
	</tr><br>
	<tr>
		<td><a href="{{ route('empresas.create') }}" type="button" class="btn btn-danger btn-lg btn-block">Cargar Empresa</a></td>
	</tr><br>	
</table>
<br><br>



@endsection