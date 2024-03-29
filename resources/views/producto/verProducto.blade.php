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
    <div class="col navbar navbar-light float right">
        <form class="d-flex" role="search">
            <div class="row">
                <div class="col p-1.5 m-1.5">
                    <input name="nombreProd" class="form-control me-2" type="search" placeholder="Nombre Producto" aria-label="Search">
                </div>
                <div class="col p-1.5 m-1.5">
                    <input name="codigoProd" class="form-control me-2" type="search" placeholder="Código del Producto" aria-label="Search">
                </div>
            </div>
            <div class="col p-1.5 m-1.5">
                <button class="btn btn-success" type="submit">Filtrar</button>
            </div>
            <div class="col p-1.5 m-1.5">
                <a class="btn btn-info" href="/exportarProductos">exportar</a>
            </div>
            <div class="col p-1.5 m-1.5">
                <a class="btn btn-info" href="{{ url('/producto/create') }}">Agregar Producto</a>
            </div>
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
                <th>Marca</th>
                <th>Actualizar</th>
                <th>Detalle</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productoAll as $producto)
            <tr>
                <td>{{ $producto->id}}</td>
                <td>{{ $producto->codigoProd}}</td>
                <td>{{ $producto->nombreProd}}</td>
                <td>{{ $producto->categoria}}</td>
                <td>{{ $producto->marcaProd}}</td>
                <td>
                    <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar al Proveedor: \n {{ $producto->nombreProd}}?')" href="{{ url('producto/'.$producto->id.'/edit') }}">
                        ✏️
                    </a>
                </td>
                <td>
                    <form>
                        <input class="btn btn-outline-primary" type="submit" value="👁️">

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $productoAll->links() }}
@endsection