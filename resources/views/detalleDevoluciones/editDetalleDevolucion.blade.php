@extends('main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div class="container w-50 border p-4 mt-4">
    <form action="{{ url('/detalleDevoluciones/'.$detalle->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <div>
                <h4 class="bg-info p-2 text-white bg-opacity-75"><b>DATOS DE LA DEVOLUCION</b></h4>
            </div>
            <div class="col p-2 mt-0.5">
                <fieldset disabled>
                    <input type="text" class="form-control" value="{{$detalle->producto->nombreProd}}">
                </fieldset>
            </div>
            <div class="col p-2 mt-0.5" style="display: none">
                <input type="text" name="product_id" class="form-control" value="{{$detalle->product_id}}">
            </div>
            <div class="row p-2 mt-0.5">
                <div class="col">
                    <label for="tittle" class="form-label"><b>Cantidad Devuelta</b></label>
                    <input type="number" name="cantidadDevuelta" class="form-control" value="{{$detalle->cantidadDevuelta}}">
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
                <div class="col">
                    <label for="tittle" class="form-label"><b>Unidad de Medida</b></label>
                    <select id="inputState" name="unidadMedida" class="form-select p-1 mt-0.5">
                        <option value="{{$detalle->unidadMedida}}">Actual: {{$medida}} </option>
                        <option value="1">unidad</option>
                        <option value="2">galon</option>
                        <option value="3">caja</option>
                        <option value="4">blister</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label"><b>Observaciones de Devolucion</b></label>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="detalle" class="form-control" value="{{$detalle->detalle}}">
        </div>
        <div class="text-center p-1 mt-4">
            <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Esta seguro que desea actualizar?')">Actualizar Devolucion</button>
        </div>
    </form>
</div>
@endsection