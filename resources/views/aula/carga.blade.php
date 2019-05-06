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
						
			<form>
					  <div class="form-group">
					    <label for="exampleFormControlInput1">Nombre del Aula </label>
					    <input type="text" class="form-control">
					  </div>
					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Edificio</label>
					    <select class="form-control">
					      <option>9 de julio</option>
					      <option> Campus av. Libertad</option>
					      <option> Campus Facultad de Ingenieria</option>
					    </select>
					  </div>

					  <div class="form-group">
					    <label for="exampleFormControlSelect1">Piso</label>
					    <select class="form-control">
					      <option>Primer Piso</option>
					      <option>Segundo Piso</option>
					      <option> Tercer Piso</option>
					    </select>
					  </div>
				 <div class="form-group">
				 	 <label >Caracteristicas</label>
				 <div class="form-check form-check-inline">
  						<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  						<label class="form-check-label" for="inlineCheckbox1">Proyector</label>
  						<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option2">
  						<label class="form-check-label" for="inlineCheckbox1">Pizarra</label>
  						<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option3">
  						<label class="form-check-label" for="inlineCheckbox1">Pizarron</label>
  						<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option4">
  						<label class="form-check-label" for="inlineCheckbox1">Ventilador</label>
  						<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option5">
  						<label class="form-check-label" for="inlineCheckbox1">Aire Acondicionado</label>

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
