@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>Crear Aula </h2>
				</div>
			
					<div class="panel-body">
						
			<form action="{{route('aulas.store')}}" method="POST">
				@csrf
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Nombre del Aula </label>
					    <input type="text" name="nombre" class="form-control" required>
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Edificio</label>
					    <select class="form-control" name="edificio_id">
					      <option value="1">9 de julio</option>
					      <option value="2"> Campus av. Libertad</option>
					      <option value="3"> Campus Facultad de Ingenieria</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Piso</label>
					    <select class="form-control" name="piso_id">
					      <option value="1">Primer Piso</option>
					      <option value="2">Segundo Piso</option>
					      <option value="3"> Tercer Piso</option>
					    </select>
					  </div>



				 <div class="form-group">
				 	 <label >Caracteristicas Del Aula</label>
				<div>
				
  				<div class="form-check">
  					
  					@foreach($caracteristicas as $caracteristica)
  					<input class="form-check-input" type="checkbox" name="caracteristicas[]" value="{{$caracteristica->id}}">
  									<label class="form-check-label" for="defaultCheck1">
    									{{ $caracteristica->nombre }}
  									</label><br/>
  				@endforeach

				</div>
			</div>


				<div class="form-group">
					<a class=" btn btn-light active float-right" href="{{ url('/aulas') }}"> Cancelar </a>
					<button type="submit" class="btn btn-primary float-right">Enviar</button>

				</div>

					
			</form>
					</div>
					
			</div>

		</div>
		
	</div>

</div>

@endsection
