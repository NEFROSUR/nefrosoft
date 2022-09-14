@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">REGISTRAR NUEVO PRODUCTO EN LA FACTURA: {{$factura->numFactura}} </h4>
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div class="container w-30 border p-4 mt-4">
    <form action="{{ url('/detalleIngresoAlmacen/create/'.$factura->id) }}" method="POST">
        <div>
            <div>
                <label for="tittle" class="form-label">REGISTRO MEDICAMENTOS</label>
            </div>
            <div class="row">
                <label for="tittle" class="form-label">PRODUCTOS</label>
                <div class="col p-2 mt-0.5">
                    <select id="inputState" name="product_id" class="form-select p-1 mt-0.5">
                        @foreach ($productoAll as $producto)
                        <option value="{{$producto->id}}">{{$producto->nombreProd}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="cantidadIngresada" class="form-control" placeholder="cantidadIngresada">
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="unidadMedida" class="form-control" placeholder="unidadMedida">
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="PrecioTotal" class="form-control" placeholder="PrecioTotal">
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="PrecioUnitario" class="form-control" placeholder="PrecioUnitario">
                </div>
                <div class="col p-2 mt-0.5">
                    <select id="inputState" name="moneda" class="form-select p-1 mt-0.5">
                        <option value="1">Soles</option>
                        <option value="2">Dolares</option>
                    </select>
                </div>
            </div>
            <div class="col p-2 mt-0.5">
                <input type="text" name="detalle" class="form-control" placeholder="Detalle">
            </div>
            <div class="text-center p-1 mt-4">
                <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Factura?')">Registrar Factura</button>
            </div>
        </div>
    </form>
</div>
@endsection