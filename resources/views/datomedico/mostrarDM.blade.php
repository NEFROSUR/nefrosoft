@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">DATOS MEDICOS DEL PACIENTE</h4>
</div>
<div class="container">
    <div class="navbar navbar-light float right">
        <form class="d-flex" role="search">
            <input name="dni" class="form-control me-2" type="search" placeholder="DNI / CE" aria-label="Search">

            <button class="btn btn-outline-success" type="submit">Filtrar</button>
        </form>

    </div>
    <div class="container">
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>Documento de Identidad</th>
                <th>Nombre del Paciente</th>
                <th>Direccion</th>
                <th>Telefono de Contacto</th>
                <th>mes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $paciente->dni}}</td>
                <td>{{ $paciente->apellidoPaterno}} {{ $paciente->apellidoMaterno}}, {{ $paciente->primerNombre}} {{ $paciente->otroNombre}}</td>
                <td>{{ $paciente->direccion}}<br>{{ $paciente->direccion1}}</td>
                <td>{{ $paciente->telefono}}<br>{{ $paciente->telefono1}}<br>{{ $paciente->telefono2}}</td>
                <td>{{ optional($paciente->datomedico)->mes}}</td>
            </tr>
        </tbody>
    </table>
    <button class="btn btn-outline-primary" type="submit">Actualizar Datos</button>

    </div>

    @endsection