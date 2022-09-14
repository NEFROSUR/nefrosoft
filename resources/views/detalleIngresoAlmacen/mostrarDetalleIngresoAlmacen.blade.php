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
<div class="navbar navbar-light float right">
    <form class="d-flex" role="search">
        <input name="numFactura" class="form-control me-2" type="search" placeholder="Numero de Factura" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
</div>
@if(!is_null($entradasAll))
@if(!is_null($primero))
<div class="container">
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">FACTURA</h4>
    </div>
    @foreach ($primero as $prime)
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Numero de Factura</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $prime->numFactura}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Usuario que ingreso la factura</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $prime->usuario}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Proveedor</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $prime->proveedor_id}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Estado de Paga</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{ $prime->estadoPaga}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Moneda</label>
        </div>
        <div class="col">
            <fieldset disabled>
                @php
                    $moneda = " ";
                    if($prime->moneda=='1'){
                        $moneda = "Pagado";
                    }else{
                        $moneda = "No pagado";
                    }
                @endphp
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$moneda}}">
            </fieldset>
        </div>
    </div>

    @endforeach
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Usuario</th>
                <th>Producto</th>
                <th>Cantidad Ingresada</th>
                <th>Costo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($entradasAll as $entradas)
            <tr>
                <td>{{ $entradas->id}}</td>
                <td>{{ $entradas->usuario}}</td>
                <td>{{ $entradas->product_id}}</td>
                <td>{{ $entradas->cantidadIngresada}}</td>
                <td>{{ $entradas->PrecioTotal}}</td>
                <td>
                    <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar al Ingreso: \n {{ $entradas->id}}?')" href="{{ url('ingresoAlmacen/'.$entradas->id.'/edit') }}">
                    ✏️
                    </a>
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
{{ $entradasAll->links() }}
@endif
@endif
@endsection