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
                    <th>Opciones</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $paciente->dni}}</td>
                    <td>{{ $paciente->apellidoPaterno}} {{ $paciente->apellidoMaterno}}, {{ $paciente->primerNombre}} {{ $paciente->otroNombre}}</td>
                    <td>
                        <form action="{{ url('/datomedico/create') }}" method="GET">
                            <input class="btn btn-outline-warning" type="submit" value="Datos Medicos Base" id="medicosB">
                        </form>
                        <a class="btn btn-outline-success btn-sm p-auto" href="{{ url('/datomedico/mdatoBase') }}">
                            Datos Medicos Base
                        </a>
                        <a class="btn btn-outline-success btn-sm p-auto" href="{{url('/datomedico/create')}}">
                            Consulta Nefrologica
                        </a>
                        <a class="btn btn-outline-success btn-sm p-auto" href="">
                            Ver KTV
                        </a>
                        <a class="btn btn-outline-success btn-sm p-auto" href="{{url('/examenKTV/create/'.$paciente->id)}}" method="POST">
                            Generar KTV
                        </a>
                    </td>

                </tr>
            </tbody>
        </table>
    </div>
    @yield('datomedicoBase')
    <button class="btn btn-outline-primary" type="submit">Actualizar Datos</button>
    @endsection