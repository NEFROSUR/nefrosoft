<div>
    <label for="tittle" class="form-label">DATOS DEL PROVEEDOR</label>
    <div class="col p-2">
        <label for="inputState" class="form-label">PROVEEDOR</label>
        <select wire:model="selectProveedor" name="proveedor_id" class="form-select">
            @foreach ($proveedores as $item)
            <option value={{$item->id}}>{{$item->nameProv}} </option>
            @endforeach
        </select>
    </div>

    @if(!is_null($proveedor))
    <input wire:model="selectProv" class="form-control" type="text" value="{{$proveedor->nameProv}}" disabled readonly>
    @endif
    
</div>