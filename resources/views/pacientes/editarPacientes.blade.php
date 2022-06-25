@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">EDITANDO PACIENTE:  {{$paciente->primerNombre}} {{$paciente->apellidoPaterno}} {{$paciente->apellidoMaterno}}</h4>
</div>
<div class="container w-25 border p-4 mt-4">
    <form action="{{ url('/pacientes/'.$paciente->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <div>
            <div>
                <label for="tittle" class="form-label">REGISTRO DEL PACIENTE</label>
            </div>

            <label for="tittle" class="form-label">Nombres del paciente</label>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="primerNombre" class="form-control" placeholder="Primer nombre" value="{{$paciente->primerNombre}}" required>
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="otroNombre" class="form-control" placeholder="Segundo nombre" value="{{$paciente->otroNombre}}">
                </div>
            </div>
            <label for="tittle" class="form-label">Apellidos del paciente</label>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <input type="text" name="apellidoPaterno" class="form-control" placeholder="Primer apellido" value="{{$paciente->apellidoPaterno}}" required>
                </div>
                <div class="col p-2 mt-0.5">
                    <input type="text" name="apellidoMaterno" class="form-control" placeholder="Segundo apellido" value="{{$paciente->apellidoMaterno}}" required>
                </div>
            </div>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Documento</label>
                    <input type="text" name="dni" class="form-control" placeholder="DNI / CE" value="{{$paciente->dni}}" required>
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Celular</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Celular" value="{{$paciente->telefono}}" minlength="9" maxlength="9">
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Historia Clinica</label>
                    <input type="text" name="numHistoria" class="form-control" placeholder="N° Historia" value="{{$paciente->numHistoria}}" required>
                </div>
            </div>
            <label for="tittle" class="form-label">Direccion</label>
            <div class="mb-3 p-2 mt-0.5">
                <input type="text" name="direccion" class="form-control" placeholder="Direccion Reniec" value="{{$paciente->direccion}}" required>
            </div>
            <div class="row">
                <div class="col">
                    <label for="inputState" class="form-label">Frecuencia</label>
                    <select id="inputState" name="frecuencia" class="form-select p-1 mt-0.5">
                        <option value="lmv">Lunes - Miecoles - Viernes</option>
                        <option value="mjs">Martes - Jueves - Sabado</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputState" class="form-label">Turno</label>
                    <select id="inputState" name="turno" class="form-select p-1 mt-0.5">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputState" class="form-label">
                        <Table>Regimen</Table>
                    </label>
                    <select id="inputState" name="regimen" class="form-select p-1 mt-0.5">
                        <option value="subsidiado">SUBSIDIADO</option>
                        <option value="semicontributivo">SEMICONTRIBUTIVO</option>
                    </select>
                </div>
            </div>
            <div class="p-1 mt-4">
                <button type="submit" class="btn btn-primary ">Guardar</button>
            </div>
        </div>
    </form>
</div>
@endsection