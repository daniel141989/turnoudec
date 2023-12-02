@section('title', __('Empleados'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Lista de Empleados </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Empleados">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="fa fa-plus"></i>  agregar Empleados
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.empleados.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Run Empleado</th>
								<th>Nombre Empleado</th>
								<th>Apellido Empleado</th>
								<th>Correo Empleado</th>
								<th>Clave</th>
								<th>Estado Empleado</th>
								<th>Box Id</th>
								<th>Perfil Sistema Id</th>
								<th>Especialidad Id</th>
								<th>Fecha Ingreso</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($empleados as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->run_empleado }}</td>
								<td>{{ $row->nombre_empleado }}</td>
								<td>{{ $row->apellido_empleado }}</td>
								<td>{{ $row->correo_empleado }}</td>
								<td>{{ $row->clave }}</td>
								<td>{{ $row->estado_empleado }}</td>
								<td>{{ $row->box_id }}</td>
								<td>{{ $row->perfil_sistema_id }}</td>
								<td>{{ $row->especialidad_id }}</td>
								<td>{{ $row->fecha_ingreso }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Empleado id {{$row->id}}? \nDeleted Empleados cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Eliminar </a></li>  
										</ul>
									</div>								
								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>						
					<div class="float-end">{{ $empleados->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>