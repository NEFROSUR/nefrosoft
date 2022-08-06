@extends('main')
@section('content')

<div class="text-center">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">EDITANDO PROFESIONAL: {{$profesional->primerNombreP}} {{$profesional->apellidoPaternoP}} {{$profesional->apellidoMaternoP}}</h4>
</div>
<div class="container border p-4 mt-4">
    <form action="{{ url('/profesionales/'.$profesional->id) }}" method="POST">
        @csrf
        {{ method_field('PATCH') }}
        <label for="tittle" class="form-label">Nombres del Doctor</label>
        <div class="row">
            <div class="col p-2 mt-0.5">
                <input type="text" name="primerNombreP" class="form-control" placeholder="Primer nombre" value="{{$profesional->primerNombreP}}" required>
            </div>
            <div class="col p-2 mt-0.5">
                <input type="text" name="otroNombreP" class="form-control" placeholder="Segundo nombre" value="{{$profesional->otroNombreP}}">
            </div>
        </div>
        <label for="tittle" class="form-label">Apellidos del Doctor</label>
        <div class="row">
            <div class="col p-2 mt-0.5">
                <input type="text" name="apellidoPaternoP" class="form-control" placeholder="Primer apellido" value="{{$profesional->apellidoPaternoP}}" required>
            </div>
            <div class="col p-2 mt-0.5">
                <input type="text" name="apellidoMaternoP" class="form-control" placeholder="Segundo apellido" value="{{$profesional->apellidoMaternoP}}" required>
            </div>
        </div>
        <div class="row">
            <div class="col p-2 mt-0.5">
                <label for="tittle" class="form-label">Documento</label>
                <input type="text" name="dniP" class="form-control" placeholder="DNI / CE" value="{{$profesional->dniP}}" required>
            </div>
            <div class="col p-2 mt-0.5">
                <label for="tittle" class="form-label">Colegiatura</label>
                <input type="text" name="colegiatura" class="form-control" placeholder="colegiatura" value="{{$profesional->colegiatura}}" required>
            </div>
            <div class="col p-2 mt-0.5">
                <label for="tittle" class="form-label">Celular</label>
                <input type="text" name="telefonoP" class="form-control" placeholder="Celular" value="{{$profesional->telefonoP}}" minlength="9" maxlength="9">
            </div>
        </div>
        <label for="tittle" class="form-label">Direccion</label>
        <div class="mb-3 p-2 mt-0.5">
            <input type="text" name="direccionP" class="form-control" placeholder="Direccion Reniec" value="{{$profesional->direccionP}}" required>
        </div>
        <div class="col">
            <label for="inputState" class="form-label">Especialidad</label>
            <select id="inputState" name="especialidad" class="form-select p-1 mt-0.5">
                <option value="{{$profesional->especialidad}}">Actual: {{$profesional->especialidad}}</option>
                <option>Nefrologia</option>
                <option>Nutricion</option>
                <option>Psicologia</option>
                <option>Trabajo Social</option>
            </select>
        </div>

        <div class="p-1 mt-4">
            <button type="submit" class="btn btn-primary ">Guardar</button>
        </div>
    </form>
</div>
@endsection