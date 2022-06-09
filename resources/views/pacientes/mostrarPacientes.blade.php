@extends('main')
@section('content')

<div class="navbar navbar-light float right">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">BUSQUEDA DE PACIENTE</h4>
    <form class="d-flex" role="search">
      <input name="nombre" class="form-control me-2" type="search" placeholder="Nombre" aria-label="Search">
      <input name="dni" class="form-control me-2" type="search" placeholder="Documento" aria-label="Search">
      <input name="turno" class="form-control me-2" type="search" placeholder="Turno" aria-label="Search">
      <input name="frecuencia" class="form-control me-2" type="search" placeholder="Frecuencia" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Filtrar</button>
    </form>
    
  </div>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Documento de Identidad</th>
                <th>Direccion</th>
                <th>Telefono de Contacto</th>
                <th>Turno</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($pacientes as $paciente)
            <tr>
                <td>{{ $paciente->id}}</td>
                <td>{{ $paciente->primerNombre}}</td>
                <td>{{ $paciente->otroNombre}}</td>
                <td>{{ $paciente->apellidoPaterno}}</td>
                <td>{{ $paciente->apellidoMaterno}}</td>
                <td>{{ $paciente->dni}}</td>
                <td>{{ $paciente->direccion}}</td>
                <td>{{ $paciente->telefono}}</td>
                <td>{{ $paciente->turno}}</td>
                <td>
                <a href="{{ url('/pacientes/'.$paciente->id.'/editarPacientes') }}">
                    Editar
                </a>    
                 | 
                    <form action="{{ url('/pacientes/'.$paciente->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input type="submit" onclick="return confirm('Quieres eliminar al paciente?')" value="Borrar">

                    </form>
                </td>
            </tr> 
            @endforeach
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>          
@endsection