@extends('master')

@section('content')

<div class="container">
	<div class="row">
		<div class="panel panel-group">
		<div class="panel panel-primary">
			<div class="panel-heading">Reporte Recibos Mensual</div>							
			<div class="panel-body">
				<form class="navbar-form" role="Search">
					<label>Seleccione un mes: </label>
				<div class="form-group">
					<select class="form-control" name="mes">						
						<option value="1">Enero</option>
						<option value="2">Febrero</option>
						<option value="3">Marzo</option>
						<option value="4">Abril</option>
						<option value="5">Mayo</option>
						<option value="6">Junio</option>
						<option value="7">Julio</option>
						<option value="8">Agosto</option>
						<option value="9">Septiembre</option>
						<option value="10">Octubre</option>
						<option value="11">Noviembre</option>
						<option value="12">Diciembre</option>							
					</select>
				</div>
				<div class="form-group">
					<select class="form-control" name="anio">						
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>												
					</select>
				</div>
				<button type="submit" class="btn btn-success">Generar reporte</button>
				<input type="button" class="btn btn-default" name="imprimir" value="Imprimir" onclick="window.print();">
			</form>
				<table class="table table-striped">
				<thead>
					<tr>
						<th>N° Recibo</th>
						<th>Fecha</th>
						<th>Tipo Recibo</th>
						<!-- <th>Empresa</th> -->										
						<!-- <th>Lote</th> -->
						<th>Servicio</th>
						<th>Impuesto</th>			
						<th>Recargo</th>
						<th>Registro</th>			
						<th>Impresión</th>
						<th>Envío</th>			
					</tr>
				</thead>
				<tbody>
					@foreach ($recibos as $recibo)
					<tr>
						<td>{{ $recibo->id }}</td>
						<td>{{ $recibo->fecha }}</td>
						@foreach ($tiposRecibos as $tiposRecibo)
							@if ($recibo->id_tipo_recibo == $tiposRecibo->id)
								<td>{{ $tiposRecibo->name }}</td>
							@endif
						@endforeach
						<!-- @foreach ($empresas as $empresa)
							@if ($recibo->id_empresa == $empresa->id)
								<td>{{ $empresa->name }}</td>
							@endif
						@endforeach -->
						<!-- <td>{{ $recibo->lote }}</td> -->
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
					</tr>
					@endforeach
				</tbody>	
			</table>
			</div>
		</div>

		<div class="panel panel-primary">
			<div class="panel-heading">Totales del mes {{ $mes }}/{{ $anio }}</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
					<tr>
						<th>Total Impuestos:</th>							
						<th>Total Recargo:</th>							
						<th>Total Dcho de Registro:</th>							
						<th>Total Impresión:</th>							
						<th>Total Envío:</th>							
					</tr>
					</thead>
					<tr>
						<td><dt style="text-align: center">$ {{ $totalImpuesto }}</dt></td>
						<td><dt style="text-align: center">$ {{ $totalRecargo }}</dt></td>
						<td><dt style="text-align: center">$ {{ $totalRegistro }}</dt></td>
						<td><dt style="text-align: center">$ {{ $totalImpresion }}</dt></td>
						<td><dt style="text-align: center">$ {{ $totalEnvio }}</dt></td>
					</tr>
				</table>
			</div>
		</div>
		</div>
	</div>
</div>

@endsection