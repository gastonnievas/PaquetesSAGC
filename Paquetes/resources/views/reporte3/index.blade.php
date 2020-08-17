@extends('master')

@section('content')

<div class="container">
	<div class="row">
		<div class="panel panel-group">
		<div class="panel panel-primary">
			<div class="panel-heading">Reporte Paquetes por períodos</div>						
			<div class="panel-body">	
				<form class="navbar-form" role="Search">
					<label>Seleccione DESDE - HASTA: </label>
					<div class="form-group">
						<input type="date" name="desde"> - 
						<input type="date" name="hasta">
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
		</div>	
		<div class="panel panel-primary">
			<div class="panel-heading">Totales del {{ $desde }} al {{ $hasta }}</div>
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