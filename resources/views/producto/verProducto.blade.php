@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">LISTA DE PRODUCTOS</h4>
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
            <input name="nombreProd" class="form-control me-2" type="search" placeholder="Nombre Producto" aria-label="Search">
            <input name="codigoProd" class="form-control me-2" type="search" placeholder="Código del Producto" aria-label="Search">
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
                <th>Codigo</th>
                <th>Nombre Producto</th>
                <th>Categoria</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($productoAll as $producto)
            <tr>
                <td>{{ $producto->id}}</td>
                <td>{{ $producto->codigoProd}}</td>
                <td>{{ $producto->nombreProd}}</td>
                <td>{{ $producto->categoria_id}}</td>
                <td>
                    <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar al Proveedor: \n {{ $producto->nombreProd}}?')" href="{{ url('producto/'.$producto->id.'/edit') }}" >
                        Actualizar
                    </a>
                    <form action="{{ url('/producto/'.$producto->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea eliminar al Proveedor\n {{ $producto->nombreProd}}?')" value="Borrar">

                    </form>
                    <form>
                        <input class="btn btn-outline-primary" type="submit" value="Detalle">

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $productoAll->links() }}
@endsection