@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">EDITANDO PROVEEDOR: {{$proveedor->nameProv}}</h4>
</div>
<div class="container border mt-4">
    <form action="{{ url('/proveedores/'.$proveedor->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <div class="text-center">
            <h2 class="bg-dark p-2 ml-0 text-white bg-opacity-10 rounded-pill">REGISTRO DE PROVEEDOR</h2>
            </div>
        
            <div class="row mt-2 ml-2">
                
                <label for="tittle" class="col form-label">Razón social del proveedor</label>
                <label for="tittle" class="col form-label">RUC:</label>

            </div>
            
            <div class="row">
                <div class="col p-3 mt-0.5">
                    <input type="text" name="nameProv" class="form-control p-2 rounded-pill  border-info" value="{{$proveedor->nameProv}}">
                </div>
                <div class="col p-3 mt-0.5">
                    <input type="text" name="rucProv" class="form-control p-2 rounded-pill  border-info" value="{{$proveedor->rucProv}}">
                </div>


            </div>


            <div class="text-center">
            <h2 class="bg-dark p-2 ml-0 text-white bg-opacity-10 rounded-pill">DATOS ADICIONALES</h2>
            </div>

            <div class="row mt-2 ml-2">
                <label for="tittle" class="col form-label  rounded-pill  border-info">Dirección: </label>
                <label for="tittle" class="col form-label  rounded-pill  border-info">Correo:</label>
                <label for="tittle" class="col form-label  rounded-pill  border-info">Teléfono:</label>


            </div>
            

            
            <div class="row">
                <div class="col p-3 mt-0.5">
                    <input type="text" name="direccionProv" class="form-control  rounded-pill  border-info" value="{{$proveedor->direccionProv}}">
                </div>
                <div class="col p-3 mt-0.5">
                    <input type="text" name="correoProv" class="form-control  rounded-pill  border-info" value="{{$proveedor->correoProv}}">
                </div>
                <div class="col p-3 mt-0.5">
                    <input type="text" name="telefonoProv" class="form-control  rounded-pill  border-info" value="{{$proveedor->telefonoProv}}" minlength="9" maxlength="9">
                </div>
            </div>
        </div>
        
        <div class="text-center">
            <h2 class="bg-dark p-2 ml-0 text-white bg-opacity-10 rounded-pill">CATEGORIA</h2>
            </div>

        <div class="col p-2 mt-0.5">
            <select id="inputState" name="categoriaProv" class="form-select p-1 mt-0.5  rounded-pill  border-info">
                <option value="{{$proveedor->categoriaProv}}">Actual: {{$proveedor->categoriaProv}}</option>
                <option>Categoria1</option>
                <option>Categoria2</option>
                <option>Categoria3</option>
                <option>Categoria4</option>
            </select>
        </div>

        <div class="text-center">
            <h2 class="bg-dark p-2 mt-2 text-white bg-opacity-10 rounded-pill">OBSERVACIONES</h2>
            </div>

        <div class="row">
            <div class="col p-3 mt-0.5">
                <input type="text" name="detalleProv" class="form-control  rounded-pill  border-info" value="{{$proveedor->detalleProv}}">
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