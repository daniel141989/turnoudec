<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nuevo Empleado</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="run_empleado"></label>
                        <input wire:model="run_empleado" type="text" class="form-control" id="run_empleado" placeholder="Run Empleado">@error('run_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_empleado"></label>
                        <input wire:model="nombre_empleado" type="text" class="form-control" id="nombre_empleado" placeholder="Nombre Empleado">@error('nombre_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="apellido_empleado"></label>
                        <input wire:model="apellido_empleado" type="text" class="form-control" id="apellido_empleado" placeholder="Apellido Empleado">@error('apellido_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="correo_empleado"></label>
                        <input wire:model="correo_empleado" type="text" class="form-control" id="correo_empleado" placeholder="Correo Empleado">@error('correo_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="clave"></label>
                        <input wire:model="clave" type="text" class="form-control" id="clave" placeholder="Clave">@error('clave') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="estado_empleado"></label>
                        <input wire:model="estado_empleado" type="text" class="form-control" id="estado_empleado" placeholder="Estado Empleado">@error('estado_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="box_id"></label>
                        <input wire:model="box_id" type="text" class="form-control" id="box_id" placeholder="Box Id">@error('box_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="perfil_sistema_id"></label>
                        <input wire:model="perfil_sistema_id" type="text" class="form-control" id="perfil_sistema_id" placeholder="Perfil Sistema Id">@error('perfil_sistema_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="especialidad_id"></label>
                        <input wire:model="especialidad_id" type="text" class="form-control" id="especialidad_id" placeholder="Especialidad Id">@error('especialidad_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_ingreso"></label>
                        <input wire:model="fecha_ingreso" type="text" class="form-control" id="fecha_ingreso" placeholder="Fecha Ingreso">@error('fecha_ingreso') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar Empleado</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="run_empleado"></label>
                        <input wire:model="run_empleado" type="text" class="form-control" id="run_empleado" placeholder="Run Empleado">@error('run_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_empleado"></label>
                        <input wire:model="nombre_empleado" type="text" class="form-control" id="nombre_empleado" placeholder="Nombre Empleado">@error('nombre_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="apellido_empleado"></label>
                        <input wire:model="apellido_empleado" type="text" class="form-control" id="apellido_empleado" placeholder="Apellido Empleado">@error('apellido_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="correo_empleado"></label>
                        <input wire:model="correo_empleado" type="text" class="form-control" id="correo_empleado" placeholder="Correo Empleado">@error('correo_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="clave"></label>
                        <input wire:model="clave" type="text" class="form-control" id="clave" placeholder="Clave">@error('clave') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="estado_empleado"></label>
                        <input wire:model="estado_empleado" type="text" class="form-control" id="estado_empleado" placeholder="Estado Empleado">@error('estado_empleado') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="box_id"></label>
                        <input wire:model="box_id" type="text" class="form-control" id="box_id" placeholder="Box Id">@error('box_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="perfil_sistema_id"></label>
                        <input wire:model="perfil_sistema_id" type="text" class="form-control" id="perfil_sistema_id" placeholder="Perfil Sistema Id">@error('perfil_sistema_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="especialidad_id"></label>
                        <input wire:model="especialidad_id" type="text" class="form-control" id="especialidad_id" placeholder="Especialidad Id">@error('especialidad_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_ingreso"></label>
                        <input wire:model="fecha_ingreso" type="text" class="form-control" id="fecha_ingreso" placeholder="Fecha Ingreso">@error('fecha_ingreso') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Guardar</button>
            </div>
       </div>
    </div>
</div>
