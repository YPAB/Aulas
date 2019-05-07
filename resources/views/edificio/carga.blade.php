@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Crear Edificio </h2>
				</div>
			
					<div class="panel-body">
						
			<form>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Nombre del edificio </label>
					    <input type="text" class="form-control">
					  </div>
									
			</div>

				<div class="form-group">
					<a class=" btn btn-light active float-right" href="{{ url('/edificios') }}"> Cancelar </a>
					<button type="submit" class="btn btn-primary float-right">Enviar</button>

				</div>

					
			</form>
					</div>
					
			</div>

		</div>
		
	</div>

</div>

@endsection
