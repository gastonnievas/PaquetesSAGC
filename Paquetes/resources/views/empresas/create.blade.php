@extends('master')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-12">
		<form class="form-horizontal" action="{{ route('empresas.store') }}" method="POST">

			@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
			@endif

			<h2>Agregar Empresa</h2><br>

			<div class="form-group">
				<div class="col-sm-4">
					<input type="number" name="id" class="form-control" placeholder="Nro Cuenta" value="{{ old('id') }}">
				</div>
				<span class="help-block">{{ $errors->first('id') }}</span>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
				</div>
				<span class="help-block">{{ $errors->first('name') }}</span>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="number" min="20000000000" max="59999999999" name="cuit" class="form-control" placeholder="CUIT" value="{{ old('cuit') }}">
				</div>
				<span class="help-block">{{ $errors->first('cuit') }}</span>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
				</div>
				<span class="help-block">{{ $errors->first('email') }}</span>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="number" min="011" max="100000" name="codigo_telefono" class="form-control" placeholder="Código área" value="{{ old('codigo_telefono') }}">
				</div>
				<span class="help-block">{{ $errors->first('codigo_telefono') }}</span>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<input type="number" min="40000" max="1600000000" name="telefono" class="form-control" placeholder="Nro Telefono" value="{{ old('telefono') }}">
				</div>
				<span class="help-block">{{ $errors->first('telefono') }}</span>
			</div>
			<div class="form-group">	
				<div class="col-sm-4">				
				<label>Es socio:</label>
				<select class="form-control" name="socio">					
					<option value="0">No</option>
					<option value="1">Si</option>						
				</select>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-4">
					<textarea name="observaciones" class="form-control" placeholder="Observaciones">{{ old('observaciones') }}</textarea> 
				</div>
				<span class="help-block">{{ $errors->first('observaciones') }}</span>
			</div>
			<div class="form-group">
				<input type="submit" value="Crear" class="btn btn-success">
				<a href="{{ route('empresas.index') }}" class="btn btn-primary">Volver</a>
			</div>				

			{{ csrf_field()}}
			
		</form>
	</div>		
</div>

@endsection