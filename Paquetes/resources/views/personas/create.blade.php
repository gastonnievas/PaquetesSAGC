@extends('master')

@section('content')


<div class="row justify-content-center">
	<div class="col-md-5">
		<form action="{{ route('personas.store') }}" method="POST">

			@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
			@endif

			<h2>Agregar Persona</h2><br>

			<div class="form-group">
				<input type="number" min="1000000" name="id" class="form-control" placeholder="DNI" value="{{ old('id') }}">
				<span class="help-block">{{ $errors->first('id') }}</span>						
			</div>
			<div class="form-group">
				<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
					<span class="help-block">{{ $errors->first('name') }}</span>
			</div>
			<div class="form-group">
				<input type="text" name="lastname" class="form-control" placeholder="Apellido" value="{{ old('lastname') }}">
					<span class="help-block">{{ $errors->first('lastname') }}</span>
			</div>				
			<div class="form-group">
				<input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}">
					<span class="help-block">{{ $errors->first('email') }}</span>
			</div>				
			<div class="form-group">
				<textarea name="observaciones" class="form-control" placeholder="Observaciones">{{ old('observaciones') }}</textarea> 
					<span class="help-block">{{ $errors->first('observaciones') }}</span>
			</div>
			<div class="form-group">
				<input type="submit" value="Crear" class="btn btn-success">
				<a href="{{ route('personas.index') }}" class="btn btn-primary">Volver</a>
			</div>				

			{{ csrf_field()}}
			
		</form>
	</div>	
</div>

@endsection