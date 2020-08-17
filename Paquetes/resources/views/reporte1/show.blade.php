<!DOCTYPE html>
<html lang="en">
<head>
  <title>Paquetes SAGC</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
    .header {
    padding: 20px;
    text-align: center;
    background: #337AB7;
    color: white;
    }
    .header h1 {
    font-size: 50px;
    }
  </style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="panel panel-group">
		<div class="panel panel-primary">
			<div class="panel-heading">Reporte Totales Recibos del {{ $desde }} al {{ $hasta }}</div>							
			<div class="panel-body">			
			<table class="table table-striped">
				<thead>
					<tr>
						<th>N° Recibo</th>
						<th>Fecha</th>
						<th>Tipo Recibo</th>									
						<th>Lote</th>
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
					</tr>
					@endforeach
				</tbody>	
			</table>			
			</div>
			</div>

			<div class="panel panel-primary">
			<div class="panel-heading">Totales del {{ $desde }} al {{ $hasta }}</div>
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
</div>
</body>
<footer class="page-footer font-small cyan darken-3">
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
      <a href="#">Gastón Nievas Inc.</a>
    </div>
    <!-- Copyright -->
</footer>
</html>