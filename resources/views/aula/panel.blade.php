@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Listado de Aulas
					<a class=" btn btn-sm btn-primary float-right" href="{{ route('aulas.create') }}" >
						Cargar Aula
					</a>
				</div>
			
					<div class="panel-body">
					
						<table class="table table-striped table-hover">
							<thead>
								<tr>
									<th>Nombre del Aula</th>
									<th >Edificio</th>
									<th >Piso</th>
									<th >Caracteristicas</th>
									<th colspan="3">&nbsp;</th>
								</tr>
							</thead>
								<tbody>
										<tr>
											<td>Aula 1</td>
											<td>9 de julio</td>
											<td>Segundo Piso</td>
											<td>Ventilador, Proyector, Pizarra</td>
											
											<td width="10px">
												<a href="" class="btn btn-sm btn-default">
													Ver
												</a>

											</td>

											<td width="10px">
												<a href="" class="btn btn-sm btn-default">
													Editar
												</a>

											</td>

												<td width="10px">
													<button class="btn btn-sm btn-danger">
														Eliminar
													</button>
												</td>
										</tr>

								</tbody>
							
						</table>


					</div>
					
			</div>

		</div>
		
	</div>

</div>


@endsection
