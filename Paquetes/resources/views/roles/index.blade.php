@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif
<p></p>
<h2>Todos los roles</h2>

<p>
		<a href="{{ route('roles.create') }}" class="btn btn-primary">Agregar Rol</a>
	</p>

<table class="table table-striped">
		<tr>
			<th>ID</th>
			<th>Nombre</th>			
			<th>Creado</th>
			<th>Actualizado</th>
			<th>Actions</th>
		</tr>

		@foreach ($roles as $rol)
			<tr>
				<td>{{ $rol->id }}</td>
				<td>{{ $rol->name }}</td>				
				<td>{{ $rol->created_at }}</td>
				<td>{{ $rol->updated_at }}</td>
				<td>
					<a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-primary">Editar</a>

					<form action="{{ route('roles.destroy', $rol->id) }}" method="POST">

						{{ csrf_field() }}
						{{ method_field('DELETE') }}		

						<input type="submit" value="Eliminar" class="btn btn-danger">

					</form>					
				</td>
			</tr>
		@endforeach
		
	</table>



@endsection