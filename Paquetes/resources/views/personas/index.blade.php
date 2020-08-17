@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif

<p><h2>Listado de Personas</h2></p>
<p>Personas que entregan o retiran paquetes</p>

<p><a href="{{ route('personas.create') }}" class="btn btn-success">Agregar Persona</a></p>

<input class="form-control" id="myInput" type="text" placeholder="Buscar.."><br>

<table class="table table-striped">
	<thead>
		<tr>
			<th>DNI</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Observaciones</th>
			<!-- <th>Creado</th>
			<th>Actualizado</th> -->
			<th></th>
		</tr>
	</thead>
	<tbody id="myTable">
		@foreach ($personas as $persona)
			<tr>
				<td>{{ $persona->id }}</td>
				<td>{{ $persona->name }}</td>
				<td>{{ $persona->lastname }}</td>
				<td>{{ $persona->email }}</td>				
				<td>{{ $persona->observaciones }}</td>
				<!-- <td>{{ $persona->created_at }}</td>
				<td>{{ $persona->updated_at }}</td> -->
				<td>					
					<form action="{{ route('personas.destroy', $persona->id) }}" method="POST">
						<a href="{{ route('personas.edit', $persona->id) }}" class="btn btn-primary">Editar</a>
						<input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar la persona?')">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}							
					</form>					
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<script>
	$(document).ready(function(){
	  $("#myInput").on("keyup", function() {
	    var value = $(this).val().toLowerCase();
	    $("#myTable tr").filter(function() {
	      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
	    });
	  });
	});
</script>

@endsection