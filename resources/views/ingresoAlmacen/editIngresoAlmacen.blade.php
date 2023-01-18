@extends('main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div class="container w-50 border p-4 mt-4">
    <form action="{{ url('/ingresoAlmacen/'.$ingresoAlmacen->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>

            <div class="bg-info p-2 text-white bg-opacity-75">
                <label for="tittle" class="form-label"><b>EDITAR FACTURA: {{$ingresoAlmacen->numFactura}}</b></label>
            </div>
            <div class="row p-2">
                <div class="col p-2">
                    <label for="tittle" class="form-label"><b>DATOS DEL USUARIO RESPONSABLE</b></label>
                    <div>
                        <select id="inputState" name="usuario" class="form-select p-1 mt-0.5">
                            <option value="{{$ingresoAlmacen->usuario}}">Actual: {{$ingresoAlmacen->usuario}}</option>
                            <option>Almacen</option>
                            <option>Administracion</option>
                            <option>Datos</option>
                            <option>Recepcion</option>
                            <option>Enfermeria</option>
                            <option>Direccion Medica</option>
                        </select>
                    </div>
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="date" class="col">Fecha de Emision</label>
                    <input type="date" name="fechaEmision" class="form-control" value="{{$ingresoAlmacen->fechaEmision}}">
                </div>

                <div class="col p-2 mt-0.5">
                    <label for="date" class="col">Estado de Pago</label>
                    <select id="inputState" name="estadoPaga" class="form-select p-1 mt-0.5">
                        <option value="{{$ingresoAlmacen->estadoPaga}}">
                            @php
                            $estadoPagado = "Sin informacion";
                            if($ingresoAlmacen->estadoPaga=='1'){
                            $estadoPagado = "Pagado";
                            }else{
                            $estadoPagado = "No Pagado";
                            }
                            @endphp
                            Actual: {{$estadoPagado}}</option>
                        <option value="1">Pagado</option>
                        <option value="2">No Pagado</option>
                    </select>
                </div>
            </div>
            <div class="row p-2">
                <div>
                    <h2><b>DATOS DE LA FACTURA</b></h2>
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="date" class="col">Fecha Ingreso a Almacen</label>
                    <input type="date" name="fechaIngreso" class="form-control" value="{{$ingresoAlmacen->fechaIngreso}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="date" class="col">Fecha de Vencimiento</label>
                    <input type="date" name="fechaVencimiento" class="form-control" value="{{$ingresoAlmacen->fechaVencimiento}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="date" class="col">Numero de Factura</label>
                    <input type="text" name="numFactura" class="form-control" value="{{$ingresoAlmacen->numFactura}}">
                </div>
            </div>
            <div>
                <label for="date" class="col">Observaciones de la Factura</label>
                <input type="text" name="detalle" class="form-control" value="{{$ingresoAlmacen->detalle}}">
            </div>

            <div class="text-center p-1 mt-4">
                <button type="submit" class="text-center btn btn-primary">Actualizar Factura</button>
            </div>
        </div>
    </form>
</div>
@endsection