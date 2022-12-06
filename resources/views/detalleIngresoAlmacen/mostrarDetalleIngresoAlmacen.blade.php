@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">PRODUCTOS x FACTURA</h4>
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
@if(!is_null($detalleIngresoAlmacen))
<div class="container border">
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">DATOS DE LA FACTURA</h4>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Numero de Factura</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$factura->numFactura}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Usuario que ingreso la factura</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$factura->usuario}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Proveedor</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$factura->proveedor->nameProv}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Estado de Paga</label>
        </div>
        <div class="col">
            <fieldset disabled>
                @php
                $estado = "No especificado";
                if($factura->estadoPaga=='1'){
                $estado = "Pagado";
                }else{
                $estado = "No Pagado";
                }
                @endphp
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$estado}}">
            </fieldset>
        </div>
    </div>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProducto">+ Agregar producto</button>
    </div>

    <div>
        @livewire('agregar-producto',["factura_id"=>$factura->id])
        @stack('scripts')
    </div>

    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">PRODUCTOS DE LA FACTURA</h4>
    </div>
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Producto</th>
                <th>Unidad de Medida</th>
                <th>Cantidad Ingresada</th>
                <th>Costo Unitario</th>
                <th>Costo Total Producto</th>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        @php
        $i = 1;
        @endphp
        <tbody>
            @foreach ($detalleIngresoAlmacen as $detalle)
            <tr>
                <td>{{ $i}}</td>
                <td>{{ $detalle->producto->nombreProd}}</td>
                <td>
                    @php
                    $medida = "";
                    switch ($detalle->unidadMedida) {
                    case 1:
                    $medida = "Unidad";
                    break;
                    case 2:
                    $medida = "Galon";
                    break;
                    case 3:
                    $medida = "Caja";
                    break;
                    case 4:
                    $medida = "Blister";
                    break;
                    }
                    @endphp
                    {{$medida}}
                </td>
                <td>{{ $detalle->cantidadIngresada}}</td>
                <td>@php
                    $moneda = "No especificado";
                    if($detalle->moneda=="1"){
                    $moneda="Soles";
                    }else{
                    $moneda="Dolares";
                    }
                    @endphp
                    {{ $detalle->PrecioUnitario}} {{ $moneda}}
                </td>
                <td>@php
                    $moneda = "No especificado";
                    if($detalle->moneda=="1"){
                    $moneda="Soles";
                    }else{
                    $moneda="Dolares";
                    }
                    @endphp
                    {{ $detalle->PrecioTotal}} {{ $moneda}}
                </td>
                <td>{{ $detalle->detalle}}</td>
                <td>
                    <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar al Ingreso: \n {{ $detalle->id}}?')" href="{{ url('detalleIngresoAlmacen/'.$detalle->id.'/edit') }}">
                        ✏️
                    </a>

                </td>
                <td>
                    <form action="{{ url('/detalleIngresoAlmacen/'.$detalle->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea eliminar al Proveedor\n {{ $detalle->producto->nombreProd}}?')" value="🗑️">

                    </form>

                </td>
            </tr>
            @php
            $i = $i+1;
            @endphp
            @endforeach
        </tbody>
    </table>
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">TOTALES</h4>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Costo Total de la Factura</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="S/.{{$factura->total}} (Nuevos Soles)">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">IGV 18%</label>
        </div>
        @php
        $igv = $factura->total * 0.18;
        @endphp
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="S/. {{$igv}} (Nuevos Soles)">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Precio IGV (incluido)</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="S/. {{$igv+$factura->total}} (Nuevos Soles)">
            </fieldset>
        </div>
    </div>
</div>
{{ $detalleIngresoAlmacen->links() }}

@endif
@endsection