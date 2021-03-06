@extends('master')

@section('content')

<div class="row justify-content-center">
		<div class="col-md-5">
			<form action="{{ route('servicios.update', $servicio->id) }}" method="POST">

				@if (session()->has('status'))
					<div class="alert alert-success">{{ session('status') }}</div>
				@endif

				<h2>Editar Servicio</h2>

				<div class="form-group">
					<input readonly type="number" name="id" class="form-control" placeholder="ID" value="{{ old('id') ?? $servicio->id }}">
						<span class="help-block">{{ $errors->first('id') }}</span>
				</div>
				<div class="form-group">
					<input type="text" name="name" class="form-control" placeholder="Servicio" value="{{ old('name') ?? $servicio->name }}">
						<span class="help-block">{{ $errors->first('name') }}</span>
				</div>				
				<div class="form-group">
					<input type="submit" value="Editar" class="btn btn-success">
					<a href="{{ route('servicios.index') }}" class="btn btn-primary">Volver</a>
				</div>				

				{{ csrf_field()}}
				{{ method_field('PUT') }}			

				
			</form>
		</div>
		
	</div>

@endsection