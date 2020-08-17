@extends('master')

@section('content')

<div class="row justify-content-center">
	<div class="col-md-5">
		<form action="{{ route('personas.update', $persona->id) }}" method="POST">

			@if (session()->has('status'))
				<div class="alert alert-success">{{ session('status') }}</div>
			@endif

			<h2>Editar Persona</h2><br>

			<div class="form-group">
				<label class="control-label" for="id">DNI:</label>
				<input type="number" name="id" class="form-control" placeholder="DNI" value="{{ old('id') ?? $persona->id }}">
					<span class="help-block">{{ $errors->first('id') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="name">Nombre:</label>
				<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') ?? $persona->name }}">
				<span class="help-block">{{ $errors->first('name') }}</span>
			</div>
			<div class="form-group">
				<label class="control-label" for="lastname">Apellido:</label>
				<input type="text" name="lastname" class="form-control" placeholder="Apellido" value="{{ old('lastname') ?? $persona->name }}">
				<span class="help-block">{{ $errors->first('lastname') }}</span>
			</div>				
			<div class="form-group">
				<label class="control-label" for="email">Email:</label>
				<input type="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') ?? $persona->email }}">
				<span class="help-block">{{ $errors->first('email') }}</span>
			</div>				
			<div class="form-group">
				<label class="control-label" for="observaciones">Observaciones:</label>
				<textarea name="observaciones" class="form-control" placeholder="Observaciones">{{ old('observaciones') ?? $persona->observaciones }}</textarea> 
				<span class="help-block">{{ $errors->first('observaciones') }}</span>
			</div>
			<div class="form-group">
				<input type="submit" value="Editar" class="btn btn-success">
				<a href="{{ route('personas.index') }}" class="btn btn-primary">Volver</a>
			</div>				

			{{ csrf_field()}}
			{{ method_field('PUT') }}	
			
		</form>
	</div>
</div>

@endsection