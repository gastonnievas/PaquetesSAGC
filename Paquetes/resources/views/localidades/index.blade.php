@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif

<p><h2>Listado Localidades de Córdoba</h2></p>

<!-- <p><a href="#" class="btn btn-success">Agregar Localidad</a></p> -->

<input class="form-control" id="myInput" type="text" placeholder="Buscar.."><br>

<table class="table table-striped">
	<thead>
		<tr>
			<!-- <th>Id Localidad</th> -->
			<th>Localidad</th>
			<th>Provincia</th>
			<th>Departamento</th>
			<th>CP</th>						
		</tr>
	</thead>
	<tbody id="myTable">
		@foreach ($localidades as $localidad)
			<tr>
				<!-- <td>{{ $localidad->id }}</td> -->
				<td>{{ $localidad->name }}</td>
				<td>{{ $localidad->provincia }}</td>
				<td>{{ $localidad->departamento }}</td>
				<td>{{ $localidad->cp }}</td>
				
				<!-- <td>
					<form action="{{ route('localidades.destroy', $localidad->id) }}" method="POST">
						<a href="{{ route('localidades.edit', $localidad->id) }}" class="btn btn-primary">Editar</a>
						<input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar la localidad?')">
							{{ csrf_field() }}
							{{ method_field('DELETE') }}
					</form>					
				</td> -->
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