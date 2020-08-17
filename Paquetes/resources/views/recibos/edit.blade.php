@extends('master')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-12">
		<form class="form-horizontal" action="{{ route('recibos.update', $recibo->id) }}" method="POST">

			@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
			@endif

			<h2>Editar Recibo</h2><br>			
			<div class="form-group">
				<label class="control-label col-sm-2" for="id">Nro recibo:</label>
				<div class="col-sm-4">
					<input type="number" min="0" max="999999" name="id" class="form-control" value="{{ old('id') ?? $recibo->id }}">
				</div>
				<span class="help-block">{{ $errors->first('id') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fecha">Fecha del recibo:</label>
				<div class="col-sm-4">
					<input type="date" name="fecha" class="form-control" value="{{ old('fecha') ?? $recibo->fecha }}">
				</div>
				<span class="help-block">{{ $errors->first('fecha') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_tipo_recibo">Tipo de recibo:</label>	
				<div class="col-sm-4">
					<select class="form-control m-bot15" name="id_tipo_recibo">
						@if ($tiposRecibos ->count())
							@foreach($tiposRecibos as $tiposRecibo)
								<option value="{{ old('$tiposRecibo->id') ?? $tiposRecibo->id }}">{{ $tiposRecibo->name }}</option>
							@endforeach
						@endif
					</select>
				</div>
				<span class="help-block">{{ $errors->first('id_tipo_recibo') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_empresa">Acopio/Empresa: </label>
				<div class="col-sm-4">
					<select class="form-control m-bot15" name="id_empresa">
						@if ($empresas ->count())
							@foreach($empresas as $empresa)
								<option value="{{ old('$empresa->id') ?? $empresa->id }}">{{ $empresa->name }} - {{ $empresa->id }}</option>
							@endforeach
						@endif
					</select>
				</div>
				<span class="help-block">{{ $errors->first('id_empresa') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_paquete">Nro paquete: </label>
				<div class="col-sm-4">
					<select class="form-control m-bot15" name="id_paquete">
						@if ($paquetes ->count())
							@foreach($paquetes as $paquete)
								<option value="{{ old('$paquete->id') ?? $paquete->id }}">{{ $paquete->id }}</option>
							@endforeach
						@endif
					</select>
				</div>
				<span class="help-block">{{ $errors->first('id_paquete') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="lote">Nro de Lote: </label>
				<div class="col-sm-4">
					<input type="number" min="0" max="999999" name="lote" class="form-control" value="{{ old('id') ?? $recibo->lote }}">
				</div>
				<span class="help-block">{{ $errors->first('lote') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_servicio">Servicio: </label>
				<div class="col-sm-4">
					<select class="form-control m-bot15" name="id_servicio">
						@if ($servicios ->count())
							@foreach($servicios as $servicio)
								<option value="{{ old('$servicio->id') ?? $servicio->id }}">{{ $servicio->name }} - {{ $servicio->id }}</option>
							@endforeach
						@endif
					</select>
				</div>
				<span class="help-block">{{ $errors->first('id_servicio') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="impuesto">Impuesto:</label>
				<div class="col-sm-4">
					<input type="number" step="any" min="0" max="99999999" name="impuesto" class="form-control" value="{{ old('impuesto') ?? $recibo->impuesto }}">
				</div>
				<span class="help-block">{{ $errors->first('impuesto') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="recargo">Recargo:</label>
				<div class="col-sm-4">
					<input type="number" step="any" min="0" max="99999999" name="regargo" class="form-control" value="{{ old('regargo') ?? $recibo->regarco }}">
				</div>
				<span class="help-block">{{ $errors->first('regargo') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="registro">Registro:</label>
				<div class="col-sm-4">
					<input type="number" step="any" min="0" max="99999999" name="registro" class="form-control" value="{{ old('registro') ?? $recibo->registro }}">
				</div>
				<span class="help-block">{{ $errors->first('registro') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="gastos_impresion">Gtos Impresión:</label>
				<div class="col-sm-4">
					<input type="number" step="any" min="0" max="99999999" name="gastos_impresion" class="form-control" value="{{ old('gastos_impresion') ?? $recibo->gastos_impresion }}">
				</div>
				<span class="help-block">{{ $errors->first('gastos_impresion') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="gastos_envio">Gtos Envío:</label>
				<div class="col-sm-4">
					<input type="number" step="any" min="0" max="99999999" name="gastos_envio" class="form-control" value="{{ old('gastos_envio') ?? $recibo->gastos_envio }}">
				</div>
				<span class="help-block">{{ $errors->first('gastos_envio') }}</span>
			</div>			
			<!-- OTROS GASTOS y CANTIDAD: DESHABILITADO -->
			<!-- <div class="form-group">
				<input type="number" step="any" min="0" max="99999999" name="otros_gastos" class="form-control" value="{{ old('otros_gastos') ?? $recibo->otros_gastos }}">
					<span class="help-block">{{ $errors->first('otros_gastos') }}</span>
			</div> -->
			<!-- <div class="form-group">
				<input type="number" min="0" max="99999999" name="cantidad" class="form-control" value="{{ old('cantidad') ?? $recibo->cantidad }}">
					<span class="help-block">{{ $errors->first('cantidad') }}</span>
			</div> -->
			<div class="form-group">
				<label class="control-label col-sm-2" for="observaciones">Observaciones:</label>
				<div class="col-sm-4">
					<textarea name="observaciones" class="form-control" >{{ old('observaciones') ?? $recibo->observaciones }}</textarea> 
				</div>
				<span class="help-block">{{ $errors->first('observaciones') }}</span>
			</div>			
			<!-- ENVIADO POR MAIL: DESHABILITADO -->
			<!-- <div class="form-check">
				<input type="checkbox" name="enviado_por_mail" class="form-check-input" value="1"> 
				<label class="form-check-label" for="enviado_por_mail">
				Enviado por mail 
				</label>
					<span class="help-block">{{ $errors->first('enviado_por_mail') }}</span>
			</div>	 -->
			<br>				
			<div class="form-group col-sm-6" align="center">
				<input type="submit" value="Editar" class="btn btn-success">
				<a href="{{ route('recibos.index') }}" class="btn btn-primary">Volver</a>
			</div>				

			{{ csrf_field()}}
			{{ method_field('PUT') }}	
			
		</form>
	</div>	
</div>

@endsection