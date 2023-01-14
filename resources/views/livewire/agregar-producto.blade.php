<div wire:ignore.self class="modal fade" id="addProducto" tabindex="-1" role="dialog" aria-labelledby="addProductoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Agregando Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="guardarProduct()">
                    <div class="form-group">
                        <label for="product_id" class="col-form-label">Producto</label>
                        <select id="product_id" name="product_id" class="form-select p-1 mt-0.5" wire:model="product_id">
                            <option> </option>
                            @foreach ($productoAll as $producto)
                            <option value="{{$producto->id}}">{{$producto->nombreProd}} :: {{$producto->marcaProd}}</option>
                            @endforeach
                        </select>
                        @error('product_id')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="cantidadIngresada" class="col-form-label">Cantidad Ingresada:(*)</label>
                        <input type="number" class="form-control" id="cantidadIngresada" wire:model="cantidadIngresada">
                        @error('cantidadIngresada')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="unidadMedida" class="col-form-label">Unidad de Medida:</label>
                        <select id="unidadMedida" name="unidadMedida" class="form-select p-1 mt-0.5" wire:model="unidadMedida">
                            <option> </option>
                            <option value="1">unidad</option>
                            <option value="2">galon</option>
                            <option value="3">caja</option>
                            <option value="4">blister</option>
                        </select>
                        @error('unidadMedida')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="PrecioTotal" class="col-form-label">Precio Total del Producto sin IGV:(*)</label>
                        <input type="text" class="form-control" id="PrecioTotal" wire:model="PrecioTotal">
                        @error('PrecioTotal')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="moneda" class="col-form-label">Moneda:</label>
                        <select id="inputState" name="moneda" class="form-select p-1 mt-0.5" wire:model="moneda">
                            <option> </option>
                            <option value="1">Soles</option>
                            <option value="2">Dolares</option>
                        </select>
                        @error('PrecioTotal')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="detalle" class="col-form-label">Lote:</label>
                        <input type="text" class="form-control" id="lote" wire:model="lote">
                    </div>
                    <div class="form-group">
                        <label for="detalle" class="col-form-label">Fecha de Vencimiento del Producto:</label>
                        <input type="date" class="form-control" id="fechaVencimiento" wire:model="fechaVencimiento">
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
        $('#addProducto').modal('hide');
    });
</script>
@endpush