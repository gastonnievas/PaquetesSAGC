@extends('master')

@section('content')

<div class="row justify-content-center">
		<div class="col-md-5">
			<form action="{{ route('roles.update', $role->id) }}" method="POST">

				@if (session()->has('status'))
					<div class="alert alert-success">{{ session('status') }}</div>
				@endif

				<h2>Editar Rol numero </h2>

				<div class="form-group">
					<input readonly type="number" name="id" class="form-control" placeholder="ID" value="{{ old('id') ?? $role->id }}">
						<span class="help-block">{{ $errors->first('id') }}</span>
				</div>
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Nombre" value="{{ old('name') ?? $role->name }}">
						<span class="help-block">{{ $errors->first('name') }}</span>
				</div>				
				<div class="form-group">
					<input type="submit" value="Editar" class="btn btn-primary">
					<a href="{{ route('roles.index') }}" class="btn btn-primary">Volver</a>
				</div>				

				{{ csrf_field()}}
				{{ method_field('PUT') }}			

				
			</form>
		</div>
		
	</div>

@endsection