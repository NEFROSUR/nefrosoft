@extends('main')
@section('content')
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>primerNombre</th>
                <th>otroNombre</th>
                <th>apellidoPaterno</th>
                <th>apellidoMaterno</th>
                <th>dni</th>
                <th>direccion</th>
                <th>telefono</th>
                <th>turno</th>

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