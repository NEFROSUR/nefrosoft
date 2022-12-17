<div wire:ignore.self class="modal fade" id="addDevolucion" tabindex="-1" role="dialog" aria-labelledby="addDevolucionLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregando Devolucion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="guardarDevolucion()">
                    <div class="form-group">
                        <label for="usuario" class="col-form-label">Usuario Responsable:(*)</label>
                        <input type="text" class="form-control" id="usuario" wire:model="usuario">
                        @error('usuario')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="personalD" class="col-form-label">Personal que devolvio:(*)</label>
                        <input type="text" class="form-control" id="personalD" wire:model="personalD">
                        @error('personalD')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="fechaDevolucion" class="col-form-label">Fecha de Devolucion:(*)</label>
                        <input type="date" class="form-control" id="fechaDevolucion" wire:model="fechaDevolucion">
                        @error('fechaDevolucion')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="detalle" class="col-form-label">Detalle:</label>
                        <input type="text" class="form-control" id="detalle" wire:model="detalle">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </form>
            </div>
            @if (session()->has('message'))
            <div class="alert alert-success text center">{{session('message')}}</div>
            @endif
        </div>
    </div>
</div>
@push('scripts')
<script>
    window.addEventListener('close-modal', event => {
        $('#addDevolucion').modal('hide');
    });
</script>
@endpush