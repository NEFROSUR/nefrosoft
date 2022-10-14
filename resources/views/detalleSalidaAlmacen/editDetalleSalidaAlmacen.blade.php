@extends('main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div class="container border p-4 mt-4">
    <form action="{{ url('/detalleSalidaAlmacen/'.$detalle->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <div>
                <label for="tittle" class="form-label">Actualizacion de salida de: {{$detalle->producto->nombreProd}} </label>
            </div>
            <div class="col p-2 mt-0.5">
                <label for="tittle" class="form-label">Producto: </label>
                <fieldset disabled>
                    <input type="text" class="form-control" value="{{$detalle->producto->nombreProd}}">
                </fieldset>
            </div>
            <div class="col p-2 mt-0.5" style="display: none">
                <input type="text" name="product_id" class="form-control" value="{{$detalle->product_id}}">
            </div>
            <div class="row">
                <div class="col p-2 mt-0.5">
                <label for="tittle" class="form-label">Cantidad de salida</label>
                    <input type="text" name="cantidad" class="form-control" value="{{$detalle->cantidad}}">
                </div>
                <div class="col p-2 mt-0.5">
                <label for="tittle" class="form-label">Unidad de Medida</label>
                    <select id="inputState" name="um" class="form-select p-1 mt-0.5">
                        <option value="{{$detalle->um}}">Actual: {{$detalle->um}}</option>
                        <option>Unidad</option>
                        <option>Bolsa</option>
                        <option>Caja</option>
                        <option>Galon</option>
                        <option>Metros</option>
                        <option>Paquete</option>
                        <option>Pares</option>
                        <option>Resma</option>
                    </select>
                </div>
            </div>
            <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Observaciones de la Salida</label>
                <input type="text" name="observacion" class="form-control" value="{{$detalle->detalle}}">
            </div>
            <div class="text-center p-1 mt-4">
                <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Factura?')">Registrar Factura</button>
            </div>
        </div>
    </form>
</div>
@endsection