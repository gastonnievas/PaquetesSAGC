@extends('master')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-5">
		<form action="{{ route('empresas.update', $empresa->id) }}" method="POST">

			@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
			@endif

			<h2>Editar Empresa</h2><br>

			<div class="form-group">
				<label class="control-label" for="id">Nro Cuenta:</label>
				<input type="number" name="id" class="form-control" placeholder="Nro Cuenta" value="{{ old('id') ?? $empresa->id }}">
				<span class="help-block">{{ $errors->first('id') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="name">Nombre Empresa:</label>
				<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') ?? $empresa->name }}">
				<span class="help-block">{{ $errors->first('name') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="cuit">CUIT:</label>
				<input type="number" min="20000000000" max="59999999999" name="cuit" class="form-control" placeholder="CUIT" value="{{ old('cuit') ?? $empresa->cuit }}">
				<span class="help-block">{{ $errors->first('cuit') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="email">Email:</label>
				<input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') ?? $empresa->email }}">
				<span class="help-block">{{ $errors->first('email') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="codigo_telefono">Cod. Teléfono:</label>
				<input type="number" min="011" max="100000" name="codigo_telefono" class="form-control" placeholder="Código área" value="{{ old('codigo_telefono') ?? $empresa->codigo_telefono }}">
				<span class="help-block">{{ $errors->first('codigo_telefono') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="telefono">Nro Telefono:</label>
				<input type="number" min="40000" max="1600000000" name="telefono" class="form-control" placeholder="Nro Telefono" value="{{ old('telefono') ?? $empresa->telefono }}">
				<span class="help-block">{{ $errors->first('telefono') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="socio">Es socio:</label>
				<select class="form-control" name="socio" >	
						<option value="{{ old('socio') ?? $empresa->socio }}"></option>	
						<option value="0">No</option>
						<option value="1">Si</option>						
				</select>
			</div>
			<!-- <div class="form-group">
				<input type="radio" name="socio" class="form-control" value="{{ old('socio') ?? $empresa->socio }}">Es Socio <br>
					<span class="help-block">{{ $errors->first('socio') }}</span>
			</div> -->
			<div class="form-group">
				<label class="control-label" for="observaciones">Observaciones:</label>
				<textarea name="observaciones" class="form-control" placeholder="Observaciones">{{ old('observaciones') ?? $empresa->observaciones }}</textarea> 
					<span class="help-block">{{ $errors->first('observaciones') }}</span>
			</div>
			<div class="form-group">
				<input type="submit" value="Editar" class="btn btn-success">
				<a href="{{ route('empresas.index') }}" class="btn btn-primary">Volver</a>
			</div>				

			{{ csrf_field()}}
			{{ method_field('PUT') }}	
			
		</form>
	</div>		
</div>

@endsection