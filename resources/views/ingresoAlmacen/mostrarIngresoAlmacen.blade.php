@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">LISTA DE FACTURAS</h4>
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
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">FACTURA</h4>
    </div>
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>N° de Factura</th>
                <th>Usuario</th>
                <th>Producto</th>
                <th>Proveedor</th>
                <th>Cantidad Ingresada</th>
                <th>Costo</th>
                <th>Moneda</th>
                <th>Estado de Paga</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($entradasAll as $entradas)
            <tr>
                <td>{{ $entradas->id}}</td>
                <td>{{ $entradas->numFactura}}</td>
                <td>{{ $entradas->usuario}}</td>
                <td>{{ $entradas->product_id}}</td>
                <td>{{ $entradas->proveedor_id}}</td>
                <td>{{ $entradas->cantidadIngresada}}</td>
                <td>{{ $entradas->PrecioTotal}}</td>
                <td>{{ $entradas->moneda}}</td>
                <td>{{ $entradas->estadoPaga}}</td>
                <td>
                    <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar al Ingreso: \n {{ $entradas->id}}?')" href="{{ url('ingresoAlmacen/'.$entradas->id.'/edit') }}">
                        Actualizar
                    </a>
                    <form action="{{ url('/ingresoAlmacen/'.$entradas->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea eliminar al Ingreso\n {{ $entradas->id}}?')" value="Borrar">

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
{{ $entradasAll->links() }}
@endsection