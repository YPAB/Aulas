@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					Listado de Características
					
						<a class=" btn btn-sm btn-primary float-right" href="{{ route('caracteristicas.create') }}" >
							Agregar Características 
						</a>

				</div>
			
					<div class="panel-body">
					
						<table class="table table-striped table-hover">
							<thead>

								<tr>
									<th>ID</th>
									<th>Nombre de la Característica</th>
									
									<th colspan="3">&nbsp;</th>
								</tr>

							</thead>
								<tbody>
									@foreach($caracteristicas as $caracteristica)
										<tr>
											<td>{{ $caracteristica->id }}</td>
											<td>{{ $caracteristica->nombre }}</td>
									

											<td width="10px">
												<a href="" class="btn btn-sm btn-primary">
													Editar
												</a>

											</td>

												<td width="10px">
													<button class="btn btn-sm btn-danger">
														Eliminar
													</button>
												</td>
										</tr>
									@endforeach

								</tbody>
							
						</table>

					</div>
					
			</div>

		</div>
		
	</div>

</div>


@endsection