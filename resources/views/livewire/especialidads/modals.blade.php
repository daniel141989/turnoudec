<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear nueva Especialidad</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="nombre_especialidad"></label>
                        <input wire:model="nombre_especialidad" type="text" class="form-control" id="nombre_especialidad" placeholder="Nombre Especialidad">@error('nombre_especialidad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="letra_especialidad"></label>
                        <input wire:model="letra_especialidad" type="text" class="form-control" id="letra_especialidad" placeholder="Letra Especialidad">@error('letra_especialidad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="estado_especialidad"></label>
                        <input wire:model="estado_especialidad" type="text" class="form-control" id="estado_especialidad" placeholder="Estado Especialidad">@error('estado_especialidad') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">actualizar Especialidad</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="nombre_especialidad"></label>
                        <input wire:model="nombre_especialidad" type="text" class="form-control" id="nombre_especialidad" placeholder="Nombre Especialidad">@error('nombre_especialidad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="letra_especialidad"></label>
                        <input wire:model="letra_especialidad" type="text" class="form-control" id="letra_especialidad" placeholder="Letra Especialidad">@error('letra_especialidad') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="estado_especialidad"></label>
                        <input wire:model="estado_especialidad" type="text" class="form-control" id="estado_especialidad" placeholder="Estado Especialidad">@error('estado_especialidad') <span class="error text-danger">{{ $message }}</span> @enderror
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
