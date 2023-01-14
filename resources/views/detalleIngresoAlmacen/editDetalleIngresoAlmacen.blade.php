@extends('main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div class="container w-50 border p-4 mt-4">
    <form action="{{ url('/detalleIngresoAlmacen/'.$detalle->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <div class="bg-info p-2 text-white bg-opacity-75">
                <label for="tittle" class="form-label"><b>EDITANDO PRODUCTO {{$detalle->producto->nombreProd}}</b></label>
            </div>
            <div class="col p-2 m-0.5">
                <fieldset disabled>
                    <input type="text" class="form-control" value="{{$detalle->producto->nombreProd}}">
                </fieldset>
            </div>
            <div class="col p-2 mt-0.5" style="display: none">
                <input type="text" name="product_id" class="form-control" value="{{$detalle->product_id}}">
            </div>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Cantidad</label>
                    <input type="number" name="cantidadIngresada" class="form-control" value="{{$detalle->cantidadIngresada}}">
                </div>
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
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Unidad de Medida</label>
                    <select id="inputState" name="unidadMedida" class="form-select p-1 mt-0.5">
                        <option value="{{$detalle->unidadMedida}}">Actual: {{$medida}} </option>
                        <option value="1">unidad</option>
                        <option value="2">galon</option>
                        <option value="3">caja</option>
                        <option value="4">blister</option>
                    </select>
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Precio Total</label>
                    <input type="text" name="PrecioTotal" class="form-control" value="{{$detalle->PrecioTotal}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Moneda</label>
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
                <label for="tittle" class="form-label">Lote del Producto</label>
                <input type="text" name="lote" class="form-control" value="{{$detalle->lote}}">
            </div>
            <div class="col p-2 mt-0.5">
                <label for="tittle" class="form-label">Fecha de Vencimiento:</label>
                <input type="date" name="fechaVencimiento" class="form-control" value="{{$detalle->fechaVencimiento}}">
            </div>
            <div class="col p-2 mt-0.5">
                <label for="tittle" class="form-label">Detalle del Ingreso</label>
                <input type="text" name="detalle" class="form-control" value="{{$detalle->detalle}}">
            </div>
            <div class="text-center p-1 mt-4">
                <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Factura?')">Registrar Factura</button>
            </div>
        </div>
    </form>
</div>
@endsection