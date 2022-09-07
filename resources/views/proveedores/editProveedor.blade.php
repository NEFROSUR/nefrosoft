@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">EDITANDO PROVEEDOR:{{$proveedor->nameProv}}</h4>
</div>
<div class="container border p-4 mt-4">
    <form action="{{ url('/proveedores/'.$proveedor->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <div>
                <label for="tittle" class="form-label">REGISTRO DEL PROVEEDOR</label>
            </div>

            <label for="tittle" class="form-label">Razón social del proveedor</label>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="nameProv" class="form-control" value="{{$proveedor->nameProv}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="rucProv" class="form-control" value="{{$proveedor->rucProv}}">
                </div>


            </div>
            <label for="tittle" class="form-label">Datos del proveedor: </label>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="direccionProv" class="form-control" value="{{$proveedor->direccionProv}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="correoProv" class="form-control" value="{{$proveedor->correoProv}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="telefonoProv" class="form-control" value="{{$proveedor->telefonoProv}}" minlength="9" maxlength="9">
                </div>
            </div>
        </div>
        <label for="tittle" class="form-label">Categoria: </label>

        <div class="col p-2 mt-0.5">
            <select id="inputState" name="categoriaProv" class="form-select p-1 mt-0.5">
                <option value="{{$proveedor->categoriaProv}}">Actual: {{$proveedor->categoriaProv}}</option>
                <option>Categoria1</option>
                <option>Categoria2</option>
                <option>Categoria3</option>
                <option>Categoria4</option>
            </select>
        </div>
        <label for="tittle" class="form-label">Datos del proveedor: </label>
        <div class="row">
            <div class="col p-2 mt-0.5">
                <input type="text" name="detalleProv" class="form-control" value="{{$proveedor->detalleProv}}">
            </div>

        </div>
        <div class="text-center p-1 mt-4">
            <button type="submit" class="btn btn-primary " onclick="return confirm('¿Confirmar guardado de proveedor?')">Guardar</button>
            <button type="submit" class="btn btn-success" onclick="limpiar()">Limpiar</button>

        </div>
    </form>
</div>
</div>
<script type="text/javascript">
    function limpiar() {
        window.location.href = "/proveedores/create";
    }
</script>
@endsection