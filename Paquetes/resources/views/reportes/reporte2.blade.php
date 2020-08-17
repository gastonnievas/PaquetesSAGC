@extends('master')

@section('content')

<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading">Reporte Totales anuales por quincena</div>
			<div class="panel-body">	
				<form class="navbar-form" role="Search">
					<label>Seleccione un año: </label>				
					<div class="form-group">
						<select class="form-control" name="anio">						
							<option value="2018">2018</option>
							<option value="2019">2019</option>
							<option value="2020">2020</option>
							<option value="2021">2021</option>
						</select>
					</div>
					<button type="submit" class="btn btn-default">Buscar</button>
				</form>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Registro de Sellos año X</th>							
						</tr>
					</thead>
					<tbody id="myTable">
						<tr>
							<th>Enero</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Febrero</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Marzo</th>
							<th></th>
						</tr>
						<tr>
							<td>Abril</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Mayo</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Junio</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Julio</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Agosto</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Septiembre</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Octubre</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Noviembre</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						<tr>
							<th>Diciembre</th>
							<th></th>
						</tr>
						<tr>
							<td>1ra Q</td>
							<td>$</td>
						</tr>
						<tr>
							<td>2da Q</td>
							<td>$</td>
						</tr>
						
					</tbody>	
				</table>

			</div>
		</div>
	</div>
</div>

@endsection