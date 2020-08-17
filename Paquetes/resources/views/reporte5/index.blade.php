@extends('master')

@section('content')

<div class="container">
	<div class="row">
		<div class="panel panel-group">
			<form class="navbar-form" role="Search">
			<label>Seleccione un año: </label>
				<div class="form-group">
					<select class="form-control" name="anio">						
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>	
						<option value="2021">2022</option>									
					</select>
				</div>
				<button type="submit" class="btn btn-success">Generar reporte</button>
				<input type="button" class="btn btn-default" name="imprimir" value="Imprimir" onclick="window.print();">
			</form>
		<!-- REPORTE RECIBOS -->
		<div class="panel panel-primary">
			<div class="panel-heading">Reporte Totales de RECIBOS para el {{ $anio }}</div>
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
		<!-- REPORTE PAQUETES -->
		<div class="panel panel-primary">
			<div class="panel-heading">Reporte Totales de PAQUETES para el {{ $anio }}</div>
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
		<!-- REPORTE PERSONAS -->
		<div class="panel panel-primary">
			<div class="panel-heading">Reporte Totales de PERSONAS para el {{ $anio }}</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
					<tr>
						<th>Total Personas Registradas:</th>							
					</tr>
					</thead>
					<tr>
						<td><dt style="text-align: center">{{ $totalPersonas }}</dt></td>
					</tr>
				</table>
			</div>
		</div>
		<!-- REPORTE EMPRESAS -->
		<div class="panel panel-primary">
			<div class="panel-heading">Reporte Totales de EMPRESAS para el {{ $anio }}</div>
			<div class="panel-body">
				<table class="table table-striped">
					<thead>
					<tr>
						<th>Total Empresas Registradas:</th>							
						<th>Total Empresas Socias:</th>								
					</tr>
					</thead>
					<tr>
						<td><dt style="text-align: center">{{ $totalEmpresas }}</dt></td>
						<td><dt style="text-align: center">{{ $totalSocios }}</dt></td>
					</tr>
				</table>
			</div>
		</div>
		</div>		
	</div>
</div>

@endsection