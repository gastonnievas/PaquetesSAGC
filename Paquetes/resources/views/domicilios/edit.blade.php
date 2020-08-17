@extends('master')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-5">
		<form action="{{ route('domicilios.update', $domicilio->id) }}" method="POST">

			@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
			@endif

			<h2>Editar Domicilio</h2><br>
			
			<div class="form-group">
				<label class="control-label" for="id_empresa">Empresa:</label>
				<select class="form-control m-bot15" name="id_empresa">
					@if ($empresas ->count())
						@foreach($empresas as $empresa)
							<option value="{{ old($empresa->id) ?? $empresa->id }}" {{ $selectedEmpresa == $empresa->id ? 'selected="selected"' : '' }}>{{ $empresa->name }} - {{ $empresa->id }}</option>
						@endforeach
					@endif
				</select>
				<span class="help-block">{{ $errors->first('id_empresa') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="calle">Calle:</label>
				<input type="text" name="calle" class="form-control" placeholder="Calle" value="{{ old('calle') ?? $domicilio->calle }}">
					<span class="help-block">{{ $errors->first('calle') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="numero_calle">Nro Calle:</label>
				<input type="number" name="numero_calle" class="form-control" placeholder="Nro calle" value="{{ old('numero_calle') ?? $domicilio->numero_calle }}">
				<span class="help-block">{{ $errors->first('numero_calle') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="piso">Piso:</label>
				<input type="number" name="piso" class="form-control" placeholder="Piso" value="{{ old('piso') ?? $domicilio->piso }}">
				<span class="help-block">{{ $errors->first('piso') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="oficina">Oficina/Depto:</label>
				<input type="text" name="oficina" class="form-control" placeholder="Oficina/Dpto" value="{{ old('oficina') ?? $domicilio->oficina }}">
				<span class="help-block">{{ $errors->first('oficina') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="id_localidad">Localidad:</label>
				<select class="form-control m-bot15" name="id_localidad">
					@if ($localidades ->count())
						@foreach($localidades as $localidad)
							<option value="{{ old($localidad->id) ?? $localidad->id }}" {{ $selectedLocalidad == $localidad->id ? 'selected="selected"' : '' }}>{{ $localidad->name }} - {{ $localidad->cp }}</option>
						@endforeach
					@endif
				</select>
				<span class="help-block">{{ $errors->first('id_localidad') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="observaciones">Observaciones:</label>
				<textarea name="observaciones" class="form-control" placeholder="Observaciones">{{ old('observaciones') ?? $domicilio->observaciones }}</textarea> 
				<span class="help-block">{{ $errors->first('observaciones') }}</span>
			</div>
			<div class="form-group">
				<input type="submit" value="Editar" class="btn btn-success">
				<a href="{{ route('domicilios.index') }}" class="btn btn-primary">Volver</a>
			</div>				

			{{ csrf_field()}}
			{{ method_field('PUT') }}		
			
		</form>
	</div>
</div>

@endsection