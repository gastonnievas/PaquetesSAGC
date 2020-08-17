@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif
<p><h2>Listado Tipos de Recibos</h2></p>

<p><a href="{{ route('tiposRecibos.create') }}" class="btn btn-success">Agregar Tipo de Recibo</a></p>

<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Nombre</th>			
		<th>Creado</th>
		<th>Actualizado</th>
		<th></th>
	</tr>
	@foreach ($tiposRecibos as $tipoRecibo)
		<tr>
			<td>{{ $tipoRecibo->id }}</td>
			<td>{{ $tipoRecibo->name }}</td>				
			<td>{{ $tipoRecibo->created_at }}</td>
			<td>{{ $tipoRecibo->updated_at }}</td>
			<td>
				<form action="{{ route('tiposRecibos.destroy', $tipoRecibo->id) }}" method="POST">
					<a href="{{ route('tiposRecibos.edit', $tipoRecibo->id) }}" class="btn btn-primary">Editar</a>
					<input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar el tipo de recibo?')">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
				</form>					
			</td>
		</tr>
	@endforeach
</table>

@endsection