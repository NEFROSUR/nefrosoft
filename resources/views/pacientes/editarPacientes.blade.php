@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">EDITANDO PACIENTE: {{$paciente->primerNombre}} {{$paciente->apellidoPaterno}} {{$paciente->apellidoMaterno}}</h4>
</div>
<div class="container border p-4 mt-4">
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
                    <label for="tittle" class="form-label">Fecha de Nacimiento</label>
                    <input type="text" name="fechaNacimiento" class="form-control" placeholder="dd-mm-yyyy" value="{{$paciente->fechaNacimiento}}">
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Celular</label>
                    <input type="text" name="telefono" class="form-control" placeholder="Celular" value="{{$paciente->telefono}}" minlength="9" maxlength="9">
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Celular</label>
                    <input type="text" name="telefono1" class="form-control" placeholder="Celular 1" value="{{$paciente->telefono1}}" minlength="9" maxlength="9">
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Celular</label>
                    <input type="text" name="telefono2" class="form-control" placeholder="Celular 2" value="{{$paciente->telefono2}}" minlength="9" maxlength="9">
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Historia Clinica</label>
                    <input type="text" name="numHistoria" class="form-control" placeholder="N° Historia" value="{{$paciente->numHistoria}}" required>
                </div>
            </div>
            <div class="row">
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Numero de Afiliacion</label>
                    <input type="text" name="numAfiliacion" class="form-control" placeholder="N° de Afiliacion" value="{{$paciente->numAfiliacion}}" required>
                </div>
                <div class="col p-2 mt-0.5">
                    <label for="tittle" class="form-label">Fecha de Vencimiento</label>
                    <input type="text" name="fechaAfiliacion" class="form-control" placeholder="dd-mm-yyyy" value="{{$paciente->fechaAfiliacion}}">
                </div>
            </div>
            <label for="tittle" class="form-label">Direccion</label>
            <div class="mb-3 p-2 mt-0.5">
                <input type="text" name="direccion" class="form-control" placeholder="Direccion Reniec" value="{{$paciente->direccion}}" required>
            </div>
            <label for="tittle" class="form-label">Direccion</label>
            <div class="mb-3 p-2 mt-0.5">
                <input type="text" name="direccion1" class="form-control" placeholder="Direccion Reniec Opcional" value="{{$paciente->direccion1}}">
            </div>
            <div class="row">
                <div class="col">
                    <label for="inputState" class="form-label">Frecuencia</label>
                    <select id="inputState" name="frecuencia" class="form-select p-1 mt-0.5">
                        <option value="{{$paciente->frecuencia}}">Actual:
                            @if ($paciente->frecuencia === 'lmv')
                            Lunes - Miercoles - Viernes
                            @elseif ($paciente->frecuencia === 'mjs')
                            Martes - Jueves - Sabado
                            @endif
                        </option>
                        <option value="lmv">Lunes - Miercoles - Viernes</option>
                        <option value="mjs">Martes - Jueves - Sabado</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputState" class="form-label">Turno</label>
                    <select id="inputState" name="turno" class="form-select p-1 mt-0.5">
                        <option value="{{$paciente->turno}}">Actual: {{$paciente->turno}}</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputState" class="form-label">Cama</label>
                    <select id="inputState" name="cama" class="form-select p-1 mt-0.5">
                        <option value="{{$paciente->cama}}">Actual: {{$paciente->cama}}</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputState" class="form-label">
                        <Table>Regimen</Table>
                    </label>
                    <select id="inputState" name="regimen" class="form-select p-1 mt-0.5">
                        <option value="{{$paciente->regimen}}">Actual: {{$paciente->regimen}}</option>
                        <option value="subsidiado">SUBSIDIADO</option>
                        <option value="semicontributivo">SEMICONTRIBUTIVO</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputState" class="form-label">
                        <Table>Actualizar Estado</Table>
                    </label>
                    <select id="inputState" name="estado" class="form-select p-1 mt-0.5">
                        <option value="{{$paciente->estado}}">Actual: {{$paciente->estado}}</option>
                        <option value="activo">ACTIVO</option>
                        <option value="inactivo">INACTIVO</option>
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