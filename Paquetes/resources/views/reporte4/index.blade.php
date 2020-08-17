@extends('master')

@section('content')

<div class="container">
	<div class="row">
		<div class="panel panel-group">
		<div class="panel panel-primary">
			<div class="panel-heading">Reporte Paquetes Mensual</div>							
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
							<th>Id</th>
							<th>Empresa</th>
							<th>Fecha Ingreso</th>			
							<th>Fecha Entrega</th>
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
							<td>{{ $paquete->fecha_entrega }}</td>
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
						<th>Total Paquetes Ingresados:</th>							
						<th>Total Paquetes Entregados:</th>								
					</tr>
					</thead>
					<tr>
						<td><dt style="text-align: center">{{ $totalIngresos }}</dt></td>
						<td><dt style="text-align: center">{{ $totalEntregas }}</dt></td>
					</tr>
				</table>
			</div>
		</div>
		</div>
	</div>
</div>

@endsection