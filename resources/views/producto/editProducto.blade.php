@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">EDITANDO PRODUCTO : {{$producto->nombreProd}}</h4>
</div>
<div class="container border p-3 mt-4">
    <form action="{{ url('/producto/'.$producto->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}

        <div class="text-center">
            <h2 class="bg-dark p-2 ml-0 text-white bg-opacity-10 rounded-pill">REGISTRO DE PRODUCTO</h2>
        </div>

        <div class="row p-2 mt-1 ">
                
                <label for="tittle" class="col form-label ">Nombre del producto: </label>
                <label for="tittle" class="col form-label ">Código:</label>

        </div>

        <div class="row p-2">
            <div class="col p-2 mt-0.5">
                <input type="text" name="nombreProd" class="form-control  p-2 rounded-pill  border-info" value="{{$producto->nombreProd}}" required>
            </div>
            <div class="col p-2 mt-0.5">
                <fieldset disabled>
                    <input type="text" name="codigoProd" class="form-control  p-2 rounded-pill  border-info" value="{{$producto->codigoProd}}" required>
                </fieldset>
            </div>
        </div>

        <div class="row p-2">

            <div class="col p-2 mt-0.5">
                <label for="tittle" class="form-label">Marca</label>
                <input type="text" name="marcaProd" class="form-control p-2 rounded-pill  border-info">
            </div>

            <div class="col p-1 mt-0.5">
                <label for="tittle" class="form-label">Unidad de medida(UM)</label>
                </label>
                <select id="inputState" name="um" class="form-select p-2 mt-0.5 p-2 rounded-pill  border-info">
                    <option>unidad</option>
                    <option>galon</option>
                    <option>caja</option>
                    <option>blister</option>

                </select>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <label for="inputState" class="form-label">
                    <Table>Categoria</Table>
                </label>
                <select id="inputState" name="categoria_id" class="form-select p-1 mt-0.5 p-2 rounded-pill  border-info">
                    <option value="1">Medicamentos</option>
                    <option value="2">Desechables médicos</option>
                    <option value="3">Limpieza</option>
                    <option value="4">Oficina</option>
                    <option value="5">Farmacia</option>
                    <option value="6">Soluciones</option>
                    <option value="7">Insumos de MH</option>
                </select>
            </div>
        </div>

        <div class="text-center p-1 mt-4">
            <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Confirmar guardado de producto?')">Guardar</button>
        </div>
    </form>
</div>
@endsection