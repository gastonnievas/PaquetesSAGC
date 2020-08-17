@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif
<p><h2>Listado Tipos de Envíos</h2></p>

<p><a href="{{ route('tiposEnvios.create') }}" class="btn btn-success">Agregar Tipo de Envío</a></p>

<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Nombre</th>			
		<th>Creado</th>
		<th>Actualizado</th>
		<th></th>
	</tr>

	@foreach ($tiposEnvios as $tiposEnvio)
		<tr>
			<td>{{ $tiposEnvio->id }}</td>
			<td>{{ $tiposEnvio->name }}</td>				
			<td>{{ $tiposEnvio->created_at }}</td>
			<td>{{ $tiposEnvio->updated_at }}</td>
			<td>
				<form action="{{ route('tiposEnvios.destroy', $tiposEnvio->id) }}" method="POST">
					<a href="{{ route('tiposEnvios.edit', $tiposEnvio->id) }}" class="btn btn-primary">Editar</a>
					<input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar el tipo de envío?')">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}	
				</form>					
			</td>
		</tr>
	@endforeach
</table>

@endsection