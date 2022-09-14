@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">BUSQUEDA DE FACTURAS</h4>
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
<div class="navbar navbar-light float right">
    <form class="d-flex" role="search">
        <input name="numFactura" class="form-control me-2" type="search" placeholder="Numero de Factura" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
</div>
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">FACTURAS</h4>
</div>
<div class="container">
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>N° de Factura</th>
                <th>Usuario Generador</th>
                <th>Producto</th>
                <th>Fecha Emision</th>
                <th>Fecha Ingreso Almacen</th>
                <th>Fecha Vencimiento</th>
                <th>Estado de Pago</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entradasAll as $entradas)
            <tr>
                <td>{{ $entradas->id}}</td>
                <td>{{ $entradas->numFactura}}</td>
                <td>{{ $entradas->usuario}}</td>
                <td>{{ $entradas->proveedor_id}}</td>
                <td>{{ $entradas->fechaEmision}}</td>
                <td>{{ $entradas->fechaIngreso}}</td>
                <td>{{ $entradas->fechaVencimiento}}</td>
                <td>@php
                    $estado = " ";
                    if($entradas->estadoPaga=='1'){
                        $estado = "Pagado";
                    }else{
                        $estado = "No Pagado";
                    }
                    @endphp
                {{$estado}}</td>
                <td>
                    <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar al Ingreso: \n {{ $entradas->id}}?')" href="{{ url('ingresoAlmacen/'.$entradas->id.'/edit') }}">
                    ✏️
                    </a>
                    <form action="{{ url('detalleIngresoAlmacen/create/'.$entradas->id) }}">
                        <input class="btn btn-outline-success" type="submit" value="➕">
                    </form>
                    <form action="{{ url('/ingresoAlmacen/create'.$entradas->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea eliminar al Ingreso\n {{ $entradas->id}}?')" value="🗑️">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $entradasAll->links() }}
@endsection