@extends('main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div class="container border-4 p-4 mt-10">
    <form action="{{ url('/detalleSalidaAlmacen/'.$detalle->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="col p-2 mt-0.5">
            <div>
                <h4 class="bg-info p-2 text-white bg-opacity-75 p-2 mt-0.5"><b>Actualizacion del detalle de la salida del producto:</b></h4>
                <fieldset disabled>
                    <input type="text" class="form-control" value="{{$detalle->producto->nombreProd}}">
                </fieldset>
            </div>
            <div style="display: none">
                <input type="text" name="product_id" class="form-control" value="{{$detalle->product_id}}">
            </div>
            <div class="row p-2 mt-0.5">
                <div>
                    <label for="tittle" class="form-label"><b>Cantidad de salida</b></label>
                    <input type="number" name="cantidad" class="form-control" value="{{$detalle->cantidad}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label"><b>Unidad de Medida</b></label>
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
            <div>
                <label for="tittle" class="form-label"><b>Observaciones de la Salida</b></label>
                <input type="text" name="observacion" class="form-control" value="{{$detalle->detalle}}">
            </div>
        </div>
        <div class="text-center p-1 mt-4">
            <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Factura?')">Registrar Factura</button>
        </div>
    </form>
</div>
@endsection