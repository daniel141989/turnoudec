<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nuevo Estudiante</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="matricula"></label>
                        <input wire:model="matricula" type="text" class="form-control" id="matricula" placeholder="Matricula">@error('matricula') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="run_estudiante"></label>
                        <input wire:model="run_estudiante" type="text" class="form-control" id="run_estudiante" placeholder="Run Estudiante">@error('run_estudiante') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_estudiante"></label>
                        <input wire:model="nombre_estudiante" type="text" class="form-control" id="nombre_estudiante" placeholder="Nombre Estudiante">@error('nombre_estudiante') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="apellido_estudiante"></label>
                        <input wire:model="apellido_estudiante" type="text" class="form-control" id="apellido_estudiante" placeholder="Apellido Estudiante">@error('apellido_estudiante') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="correo_estudiante"></label>
                        <input wire:model="correo_estudiante" type="text" class="form-control" id="correo_estudiante" placeholder="Correo Estudiante">@error('correo_estudiante') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="carrera"></label>
                        <input wire:model="carrera" type="text" class="form-control" id="carrera" placeholder="Carrera">@error('carrera') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="sede"></label>
                        <input wire:model="sede" type="text" class="form-control" id="sede" placeholder="Sede">@error('sede') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="estado_matricula"></label>
                        <input wire:model="estado_matricula" type="text" class="form-control" id="estado_matricula" placeholder="Estado Matricula">@error('estado_matricula') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_ingreso"></label>
                        <input wire:model="fecha_ingreso" type="text" class="form-control" id="fecha_ingreso" placeholder="Fecha Ingreso">@error('fecha_ingreso') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Estudiante</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="matricula"></label>
                        <input wire:model="matricula" type="text" class="form-control" id="matricula" placeholder="Matricula">@error('matricula') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="run_estudiante"></label>
                        <input wire:model="run_estudiante" type="text" class="form-control" id="run_estudiante" placeholder="Run Estudiante">@error('run_estudiante') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_estudiante"></label>
                        <input wire:model="nombre_estudiante" type="text" class="form-control" id="nombre_estudiante" placeholder="Nombre Estudiante">@error('nombre_estudiante') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="apellido_estudiante"></label>
                        <input wire:model="apellido_estudiante" type="text" class="form-control" id="apellido_estudiante" placeholder="Apellido Estudiante">@error('apellido_estudiante') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="correo_estudiante"></label>
                        <input wire:model="correo_estudiante" type="text" class="form-control" id="correo_estudiante" placeholder="Correo Estudiante">@error('correo_estudiante') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="carrera"></label>
                        <input wire:model="carrera" type="text" class="form-control" id="carrera" placeholder="Carrera">@error('carrera') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="sede"></label>
                        <input wire:model="sede" type="text" class="form-control" id="sede" placeholder="Sede">@error('sede') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="estado_matricula"></label>
                        <input wire:model="estado_matricula" type="text" class="form-control" id="estado_matricula" placeholder="Estado Matricula">@error('estado_matricula') <span class="error text-danger">{{ $message }}</span> @enderror
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
