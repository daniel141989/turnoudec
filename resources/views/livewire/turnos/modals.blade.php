<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Turno</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="numero_atencion"></label>
                        <input wire:model="numero_atencion" type="text" class="form-control" id="numero_atencion" placeholder="Numero Atencion">@error('numero_atencion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="letra_atencion"></label>
                        <input wire:model="letra_atencion" type="text" class="form-control" id="letra_atencion" placeholder="Letra Atencion">@error('letra_atencion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="empleadoid"></label>
                        <input wire:model="empleadoid" type="text" class="form-control" id="empleadoid" placeholder="Empleadoid">@error('empleadoid') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="boxid"></label>
                        <input wire:model="boxid" type="text" class="form-control" id="boxid" placeholder="Boxid">@error('boxid') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="matriculaid"></label>
                        <input wire:model="matriculaid" type="text" class="form-control" id="matriculaid" placeholder="Matriculaid">@error('matriculaid') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="especialidadid"></label>
                        <input wire:model="especialidadid" type="text" class="form-control" id="especialidadid" placeholder="Especialidadid">@error('especialidadid') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tiempo_ingreso"></label>
                        <input wire:model="tiempo_ingreso" type="text" class="form-control" id="tiempo_ingreso" placeholder="Tiempo Ingreso">@error('tiempo_ingreso') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tiempo_atender"></label>
                        <input wire:model="tiempo_atender" type="text" class="form-control" id="tiempo_atender" placeholder="Tiempo Atender">@error('tiempo_atender') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tiempo_salida"></label>
                        <input wire:model="tiempo_salida" type="text" class="form-control" id="tiempo_salida" placeholder="Tiempo Salida">@error('tiempo_salida') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="estado_turno"></label>
                        <input wire:model="estado_turno" type="text" class="form-control" id="estado_turno" placeholder="Estado Turno">@error('estado_turno') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Turno</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="numero_atencion"></label>
                        <input wire:model="numero_atencion" type="text" class="form-control" id="numero_atencion" placeholder="Numero Atencion">@error('numero_atencion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="letra_atencion"></label>
                        <input wire:model="letra_atencion" type="text" class="form-control" id="letra_atencion" placeholder="Letra Atencion">@error('letra_atencion') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="empleadoid"></label>
                        <input wire:model="empleadoid" type="text" class="form-control" id="empleadoid" placeholder="Empleadoid">@error('empleadoid') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="boxid"></label>
                        <input wire:model="boxid" type="text" class="form-control" id="boxid" placeholder="Boxid">@error('boxid') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="matriculaid"></label>
                        <input wire:model="matriculaid" type="text" class="form-control" id="matriculaid" placeholder="Matriculaid">@error('matriculaid') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="especialidadid"></label>
                        <input wire:model="especialidadid" type="text" class="form-control" id="especialidadid" placeholder="Especialidadid">@error('especialidadid') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tiempo_ingreso"></label>
                        <input wire:model="tiempo_ingreso" type="text" class="form-control" id="tiempo_ingreso" placeholder="Tiempo Ingreso">@error('tiempo_ingreso') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tiempo_atender"></label>
                        <input wire:model="tiempo_atender" type="text" class="form-control" id="tiempo_atender" placeholder="Tiempo Atender">@error('tiempo_atender') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="tiempo_salida"></label>
                        <input wire:model="tiempo_salida" type="text" class="form-control" id="tiempo_salida" placeholder="Tiempo Salida">@error('tiempo_salida') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="estado_turno"></label>
                        <input wire:model="estado_turno" type="text" class="form-control" id="estado_turno" placeholder="Estado Turno">@error('estado_turno') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Save</button>
            </div>
       </div>
    </div>
</div>
