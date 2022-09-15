<div>
    <label for="tittle" class="form-label">DATOS DEL PROVEEDOR</label>
    <div class="col p-2">
        <label for="inputState" class="form-label">PROVEEDOR</label>
        <select wire:model="selectProveedor" name="proveedor_id" class="form-select">
            @foreach ($proveedores as $item)
            <option wire:click="updateselectProveedor('{{$item->id}}')" value={{$item->id}}>{{$item->nameProv}} </option>
            @endforeach
        </select>
    </div>

    @if(!is_null($provDato))
    <div class="col p-2">
        <input wire:model="provDato" class="form-control" type="text">
        <h1>{{$provDato}}</h1>
    </div>
    @endif

</div>