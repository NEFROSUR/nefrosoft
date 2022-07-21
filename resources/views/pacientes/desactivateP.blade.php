@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">Paciente actualmente {{$paciente->estado}}: {{$paciente->primerNombre}} {{$paciente->apellidoPaterno}} {{$paciente->apellidoMaterno}}</h4>
</div>
<div class="container border p-4 mt-4">
    <form action="{{ url('/pacientes/'.$paciente->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <div>
                <label for="tittle" class="form-label">DESHABILITACION DE PACIENTE</label>
            </div>

            <label for="tittle" class="form-label">Nombres del paciente</label>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="primerNombre" class="form-control" placeholder="Primer nombre" value="{{$paciente->primerNombre}}" disabled='true'>
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="otroNombre" class="form-control" placeholder="Segundo nombre" value="{{$paciente->otroNombre}}" disabled='true'>
                </div>
            </div>
            <label for="tittle" class="form-label">Apellidos del paciente</label>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="apellidoPaterno" class="form-control" placeholder="Primer apellido" value="{{$paciente->apellidoPaterno}}" disabled='true'>
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="apellidoMaterno" class="form-control" placeholder="Segundo apellido" value="{{$paciente->apellidoMaterno}}" disabled='true'>
                </div>
            </div>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Documento</label>
                    <input type="text" name="dni" class="form-control" placeholder="DNI / CE" value="{{$paciente->dni}}" disabled='true'>
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="inputState" class="form-label">
                        <Table>Regimen</Table>
                    </label>
                    <input type="text" name="regimen" class="form-control" value="{{$paciente->regimen}}" disabled='true'>
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="inputState" class="form-label">
                        <Table>Numero</Table>
                    </label>
                    <input type="text" name="dni" class="form-control" value="{{$paciente->numAfiliacion}}" disabled='true'>
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="inputState" class="form-label">
                        <Table>Fecha de Afiliacion</Table>
                    </label>
                    <input type="text" name="dni" class="form-control" value="{{$paciente->fechaAfiliacion}}" disabled='true'>
                </div>

            </div>
            <div class="col">
                <label for="inputState" class="form-label">
                    <Table>Actualizar estado</Table>
                </label>
                <select id="inputState" name="estado" class="form-select p-1 mt-0.5">
                    <option value="activo">ACTIVO</option>
                    <option value="inactivo">INACTIVO</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="inputState" class="form-label">Razon de la inhabilitacion</label>
                <textarea id="inputState" class="form-control" name="detalleEstado" rows="3" placeholder="Actualmente esta deshabilitado por: {{$paciente->detalleEstado}}"></textarea>
            </div>
        </div>
        <div class="p-1 mt-4">
            <button type="submit" class="btn btn-primary ">Guardar</button>
        </div>
</div>
</form>
</div>
@endsection