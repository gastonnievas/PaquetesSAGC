@extends('master')

@section('content')


	<div class="row justify-content-center">
		<div class="col-md-5">
			<form action="{{ route('roles.store') }}" method="POST">

				@if (session()->has('status'))
					<div class="alert alert-success">{{ session('status') }}</div>
				@endif

				<h2>Agregar un nuevo Rol</h2>

				<!-- <div class="form-group">
					<input type="number" name="id" class="form-control" placeholder="ID" value="{{ old('id') }}">
						<span class="help-block">{{ $errors->first('id') }}</span>
				</div> -->
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') }}">
						<span class="help-block">{{ $errors->first('name') }}</span>
				</div>				
				<div class="form-group">
					<input type="submit" value="Crear" class="btn btn-primary">
					<a href="{{ route('roles.index') }}" class="btn btn-primary">Volver</a>
				</div>				

				{{ csrf_field()}}
				
			</form>
		</div>
		
	</div>

@endsection