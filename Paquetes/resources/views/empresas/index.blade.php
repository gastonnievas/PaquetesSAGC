@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif

<p><h2>Listado de Empresas</h2></p>

<p><a href="{{ route('empresas.create') }}" class="btn btn-success">Agregar Empresa</a></p>

<input class="form-control" id="myInput" type="text" placeholder="Buscar.."><br>

<table class="table table-striped">
	<thead>
		<tr>
			<th>Nro Cuenta</th>
			<th>Razón Social</th>
			<th>CUIT</th>
			<th>Email</th>
			<th>Prefijo</th>
			<th>Telefono</th>
			<th>Socio?</th>
			<th>Observaciones</th>
			<th></th>
		</tr>
	</thead>
	<tbody id="myTable">
		@foreach ($empresas as $empresa)
			<tr>
				<td>{{ $empresa->id }}</td>
				<td>{{ $empresa->name }}</td>
				<td>{{ $empresa->cuit }}</td>
				<td>{{ $empresa->email }}</td>
				<td>{{ $empresa->codigo_telefono }}</td>
				<td>{{ $empresa->telefono }}</td>
				@if ($empresa->socio == 1)
						<td>Si</td>
				@else	<td>No</td>
				@endif
				<td>{{ $empresa->observaciones }}</td>
				<td>
					<form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST">
					<a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-primary">Editar</a>
					<button type="submit" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar la empresa?')">Eliminar</button>
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