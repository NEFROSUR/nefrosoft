@extends('main')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div class="container border p-4 mt-4">
    <form action="{{ url('/salidaAlmacen/'.$salidaAlmacen->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div class="row">
            <label for="tittle" class="form-label"><b>Editando Salida: {{$salidaAlmacen->numSalida}}</b></label>
        </div>
        <div class="row">
            <div class="col">
                <label for="tittle" class="form-label">Area del Responsable</label>
                <select id="inputState" name="reponsableA" class="form-select p-1 mt-0.5">
                    <option>Almacen</option>
                    <option>Administracion</option>
                    <option>Datos</option>
                    <option>Recepcion</option>
                    <option>Enfermeria</option>
                    <option>Direccion Medica</option>
                </select>
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Nombre del Responsable</label>
                <input type="text" name="responsable" class="form-control" value="{{$salidaAlmacen->responsable}}">
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Fecha de Salida de Almacen</label>
                <input type="date" name="fechaSalida" class="form-control" value="{{$salidaAlmacen->fechaSalida}}">
            </div>
        </div>

        <div>
            <label for="tittle" class="form-label"><b>Datos del Recepcionista</b></label>
        </div>
        <div class="row">
            <div class="col">
                <label for="tittle" class="form-label">Area a la que pertenece el recepcionista del Producto</label>
                <select id="inputState" name="areaRecepcion" class="form-select p-1 mt-0.5">
                    <option value={{$salidaAlmacen->areaRecepcion}}>Actual: {{$salidaAlmacen->areaRecepcion}}</option>
                    <option>Tecnicos Enfermeria</option>
                    <option>Enfermeria</option>
                    <option>Direccion Medica</option>
                    <option>Administracion</option>
                    <option>Datos</option>
                    <option>Recepcion</option>
                    <option>Almacen</option>
                </select>
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Nombre del Recepcionista de Producto</label>
                <input type="text" name="recepcionista" class="form-control" value="{{$salidaAlmacen->recepcionista}}">
            </div>

        </div>
        <div>
            <label for="tittle" class="form-label"><b>Datos del area destino del producto</b></label>
        </div>
        <div class="row">
            <div class="col">
                <div class="col">
                    <label for="tittle" class="form-label">Turno de Entrega</label>
                    <select id="inputState" name="turno" class="form-select p-1 mt-0.5">
                        <option value={{$salidaAlmacen->turno}}>Actual: TURNO {{$salidaAlmacen->turno}}</option>
                        <option value="1">TURNO 1</option>
                        <option value="2">TURNO 2</option>
                        <option value="3">TURNO 3</option>
                        <option value="4">TURNO 4</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Area de Entrega</label>
                <select id="inputState" name="areaDestino" class="form-select p-1 mt-0.5">
                    <option value={{$salidaAlmacen->areaDestino}}>Actual: {{$salidaAlmacen->areaDestino}}</option>
                    <option>Pacientes</option>
                    <option>Tecnicos Enfermeria</option>
                    <option>Enfermeria</option>
                    <option>Direccion Medica</option>
                    <option>Administracion</option>
                    <option>Datos</option>
                    <option>Recepcion</option>
                    <option>Almacen</option>
                </select>
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Detalle de la Entrega</label>
                <input type="text" name="detalle" class="form-control" value="{{$salidaAlmacen->detalle}}">
            </div>
        </div>
        <div class="text-center p-1 mt-4">
            <button type="submit" class="text-center btn btn-primary">Actualizar Salida</button>
        </div>
    </form>
</div>
@endsection