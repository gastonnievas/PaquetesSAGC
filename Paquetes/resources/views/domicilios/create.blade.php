@extends('master')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-5">
		<form action="{{ route('domicilios.store') }}" method="POST">

			@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
			@endif

			<h2>Agregar Domicilio</h2><br>
			
			<div class="form-group">
			<select class="form-control m-bot15" name="id_empresa">
				<option value="7">Seleccione una empresa</option>
				@if ($empresas ->count())
					@foreach($empresas as $empresa)
						<option value="{{ $empresa->id }}">{{ $empresa->name }} - {{ $empresa->id }}</option>
					@endforeach
				@endif
			</select>
			</div>
			<div class="form-group">
				<input type="text" name="calle" class="form-control" placeholder="Calle" value="{{ old('calle') }}">
					<span class="help-block">{{ $errors->first('calle') }}</span>
			</div>
			<div class="form-group">
				<input type="number" min="0" max="99999" name="numero_calle" class="form-control" placeholder="Nro calle" value="{{ old('numero_calle') }}">
					<span class="help-block">{{ $errors->first('numero_calle') }}</span>
			</div>
			<div class="form-group">
				<input type="number" name="piso" class="form-control" placeholder="Piso" value="{{ old('piso') }}">
					<span class="help-block">{{ $errors->first('piso') }}</span>
			</div>
			<div class="form-group">
				<input type="text" name="oficina" class="form-control" placeholder="Depto/Oficina" value="{{ old('oficina') }}">
					<span class="help-block">{{ $errors->first('oficina') }}</span>
			</div>
			<div class="form-group">
			<select class="form-control m-bot15" name="id_localidad">
				<option value="1"> Seleccione una localidad</option>
				@if ($empresas ->count())
					@foreach($localidades as $localidad)
						<option value="{{ $localidad->id }}">{{ $localidad->name }}, {{ $localidad->cp }}</option>
					@endforeach
				@endif
			</select>
			</div>				
			<div class="form-group">
				<textarea name="observaciones" class="form-control" placeholder="Observaciones">{{ old('observaciones') }}</textarea> 
					<span class="help-block">{{ $errors->first('observaciones') }}</span>
			</div>
			<div class="form-group">
				<input type="submit" value="Crear" class="btn btn-success">
				<a href="{{ route('domicilios.index') }}" class="btn btn-primary">Volver</a>
			</div>						

			{{ csrf_field()}}
			
		</form>
		
	</div>
	
</div>

@endsection