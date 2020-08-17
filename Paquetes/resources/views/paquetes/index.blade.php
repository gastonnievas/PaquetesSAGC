@extends('master')
@section('content')
<!-- PAGINA INDEX PAQUETES -->

<!-- Mensaje de alerta -->
@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif

<p><h2>Listado de Paquetes</h2></p>
<!-- Botón nuevo paquete -->
<p><a href="{{ route('paquetes.create') }}" class="btn btn-success">Nuevo Paquete</a></p>
<!-- Filtro buscador -->
<input class="form-control" id="myInput" type="text" placeholder="Buscar.."><br>
<!-- Tabla contenido -->
<table class="table table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Empresa</th>
			<th>Fecha Ingreso</th>			
			<th>Tipo Ingreso</th>
			<th>Fecha Entrega</th>
			<th>Tipo Entrega</th>			
			<th>Retiró</th>
			<th></th>
		</tr>
	</thead>
	<tbody id="myTable">
		@foreach ($paquetes as $paquete)
		<tr>				
			<td>{{ $paquete->id }}</td>
			@foreach ($empresas as $empresa)
				@if ($paquete->id_empresa == $empresa->id)
					<td>{{ $empresa->name }}</td>
				@endif
			@endforeach
			<td>{{ $paquete->fecha_ingreso }}</td>				
			@foreach ($tiposEnvios as $tiposEnvio)
				@if ($paquete->id_tipo_ingreso == $tiposEnvio->id)
					<td>{{ $tiposEnvio->name }}</td>
				@endif
			@endforeach
			<td>{{ $paquete->fecha_entrega }}</td>
			@foreach ($tiposEnvios as $tiposEnvio)
				@if ($paquete->id_tipo_entrega == $tiposEnvio->id)
					<td>{{ $tiposEnvio->name }}</td>
				@endif				
			@endforeach
			@if(is_null ($paquete->id_tipo_entrega))
					<td></td>
			@endif
			@foreach ($personas as $persona)
				@if ($paquete->id_persona_retira == $persona->id)
					<td>{{ $persona->lastname }} {{ $persona->name }}</td>
				@endif
			@endforeach	
			@if(is_null ($paquete->id_persona_retira))
					<td></td>
			@endif	
			<!-- Columna de acciones Editar y Eliminar -->		
			<td>				
				<form action="{{ route('paquetes.destroy', $paquete->id) }}" method="POST">
					<a href="{{ route('paquetes.edit', $paquete->id) }}" class="btn btn-primary">Editar</a>
					<input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar el paquete?')">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}	
				</form>					
			</td>
		</tr>
		@endforeach
	</tbody>	
</table>
<!-- JS del filtro buscador -->
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