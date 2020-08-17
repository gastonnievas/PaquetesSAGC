@extends('master')

@section('content')

@if (session()->has('status'))
	<div class="alert alert-success">{{ session('status') }}</div>
@endif

<p><h2>Listado de Recibos</h2></p>

<p><a href="{{ route('recibos.create') }}" class="btn btn-success">Cargar Recibo</a></p>

<input class="form-control" id="myInput" type="text" placeholder="Buscar.."><br>
<table class="table table-striped">
	<thead>
		<tr>
			<th>Nro Recibo</th>
			<th>Fecha</th>
			<th>Tipo Recibo</th>
			<th>Empresa</th>
			<th>Paquete</th>			
			<th>Lote</th>
			<th>Servicio</th>
			<th>Impuesto</th>			
			<th>Recargo</th>
			<th>Registro</th>			
			<th>Impresión</th>
			<th>Envío</th>
			<!-- <th>Cantidad</th> -->
			<th>Observasiones</th>
			<th></th>
		</tr>
	</thead>
	<tbody id="myTable">
		@foreach ($recibos as $recibo)
		<tr>
			<td>{{ $recibo->id }}</td>
			<td>{{ $recibo->fecha }}</td>
			@foreach ($tiposRecibos as $tiposRecibo)
				@if ($recibo->id_tipo_recibo == $tiposRecibo->id)
					<td>{{ $tiposRecibo->name }}</td>
				@endif
			@endforeach
			@foreach ($empresas as $empresa)
				@if ($recibo->id_empresa == $empresa->id)
					<td>{{ $empresa->name }}</td>
				@endif
			@endforeach
			@foreach ($paquetes as $paquete)
				@if ($recibo->id_paquete == $paquete->id)
					<td>{{ $paquete->id }}</td>
				@endif
			@endforeach
			<td>{{ $recibo->lote }}</td>
			@foreach ($servicios as $servicio)
				@if ($recibo->id_servicio == $servicio->id)
					<td>{{ $servicio->name }}</td>
				@endif
			@endforeach
			<td>$ {{ $recibo->impuesto }}</td>
			<td>$ {{ $recibo->recargo }}</td>
			<td>$ {{ $recibo->registro }}</td>
			<td>$ {{ $recibo->gastos_impresion }}</td>
			<td>$ {{ $recibo->gastos_envio }}</td>
			<!-- <td>{{ $recibo->cantidad }}</td> -->
			<td>{{ $recibo->observaciones }}</td>			
			<td>
				<form action="{{ route('recibos.destroy', $recibo->id) }}" method="POST">
					<a href="{{ route('recibos.edit', $recibo->id) }}" class="btn btn-primary">Editar</a>
					<input type="submit" value="Eliminar" class="btn btn-danger" onclick="return confirm('¿Seguro desea eliminar el recibo?')">
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