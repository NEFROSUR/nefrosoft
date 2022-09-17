@extends('main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div class="container border p-4 mt-4">
    <form action="{{ url('/detalleIngresoAlmacen/'.$detalle->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <div>
                <label for="tittle" class="form-label">REGISTRO MEDICAMENTOS</label>
            </div>
            <div class="col p-2 mt-0.5">
                <fieldset disabled>
                    <input type="text" class="form-control" value="{{$detalle->producto->nombreProd}}">
                </fieldset>
            </div>
            <div class="col p-2 mt-0.5" style="display: none">
                <input type="text" name="product_id" class="form-control" value="{{$detalle->product_id}}">
            </div>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="cantidadIngresada" class="form-control" value="{{$detalle->cantidadIngresada}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="unidadMedida" class="form-control" value="{{$detalle->unidadMedida}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="PrecioTotal" class="form-control" value="{{$detalle->PrecioTotal}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="PrecioUnitario" class="form-control" value="{{$detalle->PrecioUnitario}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <select id="inputState" name="moneda" class="form-select p-1 mt-0.5">
                        <option value="{{$detalle->moneda}}">@php
                            $moneda = "No especificado";
                            if($detalle->moneda=="1"){
                            $moneda="Soles";
                            }else{
                            $moneda="Dolares";
                            }
                            @endphp
                            Actual : {{$moneda}}</option>
                        <option value="1">Soles</option>
                        <option value="2">Dolares</option>
                    </select>
                </div>
            </div>
            <div class="col p-2 mt-0.5">
                <input type="text" name="detalle" class="form-control" value="{{$detalle->detalle}}">
            </div>
            <div class="text-center p-1 mt-4">
                <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Factura?')">Registrar Factura</button>
            </div>
        </div>
    </form>
</div>
@endsection