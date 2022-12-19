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
<div class="container">
    <div class="row">
        <div class="col p-1 m-1 navbar navbar-light float right">
            <form class="d-flex" role="search">
                <div class="col">
                    <label for="inputState" class="form-label"><b>BUSQUEDA POR FACTURA</b></label>
                </div>
                <div class="col p-2.5 m-1">
                    <input name="numFactura" class="form-control me-2" type="search" placeholder="Numero de Factura" aria-label="Search">
                </div>
                <div class="col p-2.5 m-1">
                    <button class="btn btn-success" type="submit">Filtrar</button>
                </div>
            </form>
        </div>
        <div class="col p-3.5 m-2">
            <a class="btn btn-info" href="/exportarFacturas">Exportar Lista de Facturas</a>
        </div>
        <div class="col p-3.5 m-2 right">
            <a class="btn btn-info" href="{{url('/ingresoAlmacen/create')}}">+ Agregar Factura</a>
        </div>
        <div class="col p-3.5 m-2 right">
            <a class="btn btn-info" href="{{url('/ingresoAlmacen/refresh')}}">Actualizar</a>
        </div>
    </div>
</div>
@if(!is_null($entradasAll))
<div class="container border">
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
                    <th>Proveedor</th>
                    <th>Fecha Emision</th>
                    <th>Fecha Ingreso Almacen</th>
                    <th>Fecha Vencimiento</th>
                    <th>Estado de Pago</th>
                    <th>Ver</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($entradasAll as $entradas)
                <tr>
                    <td>{{ $entradas->numIngreso}}</td>
                    <td>{{ $entradas->numFactura}}</td>
                    <td>{{ $entradas->usuario}}</td>
                    <td>{{ $entradas->proveedor->nameProv}}</td>
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
                        {{$estado}}
                    </td>
                    <td>
                        <form action="{{ url('detalleIngresoAlmacen/show/'.$entradas->id) }}">
                            <input class="btn btn-outline-primary" type="submit" value="👁️">
                        </form>
                    </td>
                    <td>
                        <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar al Ingreso: \n {{ $entradas->id}}?')" href="{{ url('ingresoAlmacen/'.$entradas->id.'/edit') }}">
                            ✏️
                        </a>
                    </td>
                    <td>
                        <form action="{{ url('/ingresoAlmacen/'.$entradas->id) }}" method="POST">
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
</div>
{{ $entradasAll->links() }}
@endif
@endsection