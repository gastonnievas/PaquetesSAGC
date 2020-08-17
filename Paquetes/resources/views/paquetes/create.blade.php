@extends('master')
@section('content')
<!-- PAGINA FORMULARIO CREAR PAQUETE -->

<div class="row justify-content-center">
	<div class="col-md-12">
		<form class="form-horizontal" action="{{ route('paquetes.store') }}" method="POST">

			@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
			@endif

			<h2>Agregar un nuevo paquete</h2><br>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fecha_ingreso">Fecha Ingreso:</label>
				<div class="col-sm-4">
					<input type="date" name="fecha_ingreso" class="form-control" value="{{ old('fecha_ingreso') }}">						
				</div>
				<span class="help-block">{{ $errors->first('fecha_ingreso') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_empresa">Acopio/Empresa:</label>
				<div class="col-sm-4">
				<select class="form-control m-bot15" name="id_empresa">
					<option value="">Seleccione una empresa</option>
					@if ($empresas ->count())
						@foreach($empresas as $empresa)
							<option value="{{ $empresa->id }}">{{ $empresa->name }} - {{ $empresa->id }}</option>
						@endforeach
					@endif
				</select>
				</div>
				<span class="help-block">{{ $errors->first('id_empresa') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_tipo_ingreso">Tipo de Ingreso:</label>
				<div class="col-sm-4">
				<select class="form-control m-bot15" name="id_tipo_ingreso">
					<option value="">Seleccione forma de recepción</option>
					@if ($tiposEnvios ->count())
						@foreach($tiposEnvios as $tiposEnvio)
							<option value="{{ $tiposEnvio->id }}">{{ $tiposEnvio->name }}</option>
						@endforeach
					@endif
				</select>
				</div>
				<span class="help-block">{{ $errors->first('id_tipo_ingreso') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="fecha_entrega">Fecha Entrega:</label>
				<div class="col-sm-4">
					<input type="date" name="fecha_entrega" class="form-control" value="{{ old('fecha_entrega') }}">
				</div>
				<span class="help-block">{{ $errors->first('fecha_entrega') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_tipo_entrega">Tipo de Retiro:</label>
				<div class="col-sm-4">
					<select class="form-control m-bot15" name="id_tipo_entrega">
						<option value="">Seleccione forma de entrega</option>
						@if ($tiposEnvios ->count())
							@foreach($tiposEnvios as $tiposEnvio)
								<option value="{{ $tiposEnvio->id }}">{{ $tiposEnvio->name }}</option>
							@endforeach
						@endif
					</select>
				</div>
				<span class="help-block">{{ $errors->first('id_tipo_entrega') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="id_persona_retira">Retira:</label>
				<div class="col-sm-4">
					<select class="form-control m-bot15" name="id_persona_retira">
						<option value="">Seleccione quién retira</option>
						@if ($personas ->count())
							@foreach($personas as $persona)
								<option value="{{ $persona->id }}">{{ $persona->lastname }}, {{ $persona->name }} - {{ $persona->id }}</option>
							@endforeach
						@endif
					</select>
				</div>
				<span class="help-block">{{ $errors->first('id_persona_retira') }}</span>
			</div>
			<!-- <div class="form-check">					
				<div class="col-sm-6" align="center">		
					<label class="control-label" for="entregado">Entregado ?</label>		
					<input type="checkbox" name="entregado" class="form-check-input" value="1">
				</div>
				<span class="help-block">{{ $errors->first('entregado') }}</span>
			</div> -->	
			<br>	
			<div class="form-group col-sm-6" align="center">			
				<input type="submit" value="Crear" class="btn btn-success">
				<a href="{{ route('paquetes.index') }}" class="btn btn-primary">Volver</a>
			</div>						

			{{ csrf_field()}}
							
		</form>			
	</div>		
</div>

@endsection