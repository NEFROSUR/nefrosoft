<div wire:ignore.self class="modal fade" id="addProductoS" tabindex="-1" role="dialog" aria-labelledby="addProductoSLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title"><b>Agregando Producto a la Salida</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form wire:submit.prevent="guardarProduct()">
                    <div class="form-group">
                        <label for="product_id" class="col-form-label">Producto en Stock</label>
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
                        <label for="cantidad" class="col-form-label">Cantidad de Salida</label>
                        <input type="number" class="form-control" id="cantidad" wire:model="cantidad">
                        @error('cantidad')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="unidadMedida" class="col-form-label">Unidad de Medida</label>
                        <select id="unidadMedida" name="unidadMedida" class="form-select p-1 mt-0.5" wire:model="unidadMedida">
                            <option> </option>
                            <option>Unidad</option>
                            <option>Bolsa</option>
                            <option>Caja</option>
                            <option>Galon</option>
                            <option>Metros</option>
                            <option>Paquete</option>
                            <option>Pares</option>
                            <option>Resma</option>
                        </select>
                        @error('unidadMedida')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="destino" class="col-form-label">Usuario destino especifico</label>
                        <input type="text" class="form-control" id="destino" wire:model="destino">
                        @error('destino')
                        <span class="text-danger" style="font-size: 11.5px;">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="observacion" class="col-form-label">Observaciones del producto entregado</label>
                        <input type="textarea" class="form-control" id="observacion" wire:model="observacion">
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
        $('#addProductoS').modal('hide');
    });
</script>
@endpush