@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">STOCK DEL PRODUCTO</h4>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <p><strong>Opps: No se pudo realizar la accion</strong></p>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="navbar navbar-light float right">
        <form class="d-flex" role="search">
            <div class="col">
                <label for="inputState" class="form-label">Busca por codigo</label>
                <input name="codigoProd" class="form-control me-2" type="search" placeholder="Código del Producto" aria-label="Search">
            </div>

            <div class="form-group">
                <div class="col">
                    <label for="inputState" class="form-label">Categoria</label>
                    <select id="inputState" name="categoria_id" class="form-select p-1 mt-0.5">
                        <option value=" ">Todos</option>
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
            <button class="btn btn-outline-success" type="submit">Filtrar</button>
        </form>
    </div>


</div>
<div class="container">
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>CODIGO DEL PRODUCTO</th>
                <th>NOMBRE DEL PRODUCTO</th>
                <th>STOCK EN ALMACEN</th>
                <th>ULTIMA ACTUALIZACION</th>
                <th>-</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($productoAll as $producto)
            <tr>
                <td>{{ $producto->id}}</td>
                <td>{{ $producto->codigoProd}}</td>
                <td>{{ $producto->nombreProd}}</td>
                <td>{{ $producto->stock}}</td>
                <td>{{ $producto->updated_at}}</td>
                <td>
                    <form action="{{ url('/producto/'.$producto->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea eliminar al Proveedor\n {{ $producto->nombreProd}}?')" value="Generar Salida">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $productoAll->links() }}

@endsection