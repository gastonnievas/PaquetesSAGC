@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif

<p><h2>Listado de Domicilios</h2></p>

<p><a href="{{ route('domicilios.create') }}" class="btn btn-success">Agregar Domicilio</a></p>

<input class="form-control" id="myInput" type="text" placeholder="Buscar.."><br>
  
<table class="table table-striped">
	<thead>
		<tr>
			<!-- <th>Id</th> -->
			<th>Empresa</th>
			<th>Calle</th>
			<th>Nro</th>
			<th>Piso</th>
			<th>Of/Dpto</th>			
			<th>Localidad</th>
			<th>Observación</th>
			<th></th>
		</tr>
	</thead>
	<tbody id="myTable">
			@foreach ($domicilios as $domicilio)
			<tr>				
				<!-- <td>{{ $domicilio->id }}</td> -->
				@foreach ($empresas as $empresa)
					@if ($domicilio->id_empresa == $empresa->id)
						<td>{{ $empresa->name }}</td>
					@endif
				@endforeach
				<td>{{ $domicilio->calle }}</td>
				<td>{{ $domicilio->numero_calle }}</td>
				<td>{{ $domicilio->piso }}</td>
				<td>{{ $domicilio->oficina }}</td>
				@foreach ($localidades as $localidad)
					@if ($domicilio->id_localidad == $localidad->id)
						<td>{{ $localidad->name }}</td>
					@endif
				@endforeach
				<td>{{ $domicilio->observaciones }}</td>
				<td>
					<form action="{{ route('domicilios.destroy', $domicilio->id) }}" method="POST">
						<a href="{{ route('domicilios.edit', $domicilio->id) }}" class="btn btn-primary">Editar</a>
						<input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar el domicilio?')">
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