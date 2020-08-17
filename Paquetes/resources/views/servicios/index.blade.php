@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif

<p><h2>Listado Tipos de Servicios</h2></p>

<p><a href="{{ route('servicios.create') }}" class="btn btn-success">Agregar Servicio</a></p>

<table class="table table-striped">
	<tr>
		<th>ID</th>
		<th>Servicio</th>			
		<th>Creado</th>
		<th>Actualizado</th>
		<th>Actions</th>
	</tr>

	@foreach ($servicios as $servicio)
		<tr>
			<td>{{ $servicio->id }}</td>
			<td>{{ $servicio->name }}</td>				
			<td>{{ $servicio->created_at }}</td>
			<td>{{ $servicio->updated_at }}</td>
			<td>	
				<form action="{{ route('servicios.destroy', $servicio->id) }}" method="POST">
					<a href="{{ route('servicios.edit', $servicio->id) }}" class="btn btn-primary">Editar</a>
					<input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar el servicio?')">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
				</form>					
			</td>
		</tr>
	@endforeach
</table>

@endsection