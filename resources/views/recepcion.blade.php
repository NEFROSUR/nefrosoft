@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">LISTA DE FORMATOS DE ATENCION</h4>
</div>
<div>
    <label for="exampleFormControlSelect2">Busqueda</label>
    <div class="navbar navbar-light float right">
        <form class="d-flex" role="search">
            <input name="correlativo" class="form-control me-2" type="search" placeholder="Correlativo" aria-label="Search">
            <input name="documento" class="form-control me-2" type="search" placeholder="documento" aria-label="Search">
            <div class="form-group">
                <div class="col">
                    <label for="inputState" class="form-label">Frecuencia</label>
                    <select id="inputState" name="frecuencia" class="form-select p-1 mt-0.5">
                        <option value=''>Todos</option>
                        <option value="lmv">Lunes - Miecoles - Viernes</option>
                        <option value="mjs">Martes - Jueves - Sabado</option>
                    </select>
                </div>
            </div>
            <div class="col">
                <label for="inputState" class="form-label">Turno</label>
                <select id="inputState" name="turno" class="form-select p-1 mt-0.5">
                    <option value=''>Todos</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                </select>
            </div>

            <button class="btn btn-outline-success" type="submit">Filtrar</button>
        </form>

    </div>
</div>
<table class="table table-light table-hover ">
    <thead class="thead-light">
        <tr>
            <th>N°</th>
            <th>Correlativo</th>
            <th>Fecha de Atencion</th>
            <th>Tipo de Atencion</th>
            <th>Paciente</th>
            <th>Profesional</th>
            <th>Fecha de registro</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($totalFuas as $fua)
        <tr>
            <td>{{ $fua->id }}</td>
            <td>{{ $fua->correlativo }}</td>
            <td>{{ $fua->fecha }}</td>
            <td>{{ $fua->tipoDeConsulta }}</td>
            <td>{{ $fua->paciente->primerNombre }} {{ $fua->paciente->otroNombre }}{{ $fua->paciente->apellidoPaterno }} {{ $fua->paciente->apellidoMaterno }}</td>
            <td>{{ $fua->profesional->primerNombreP }} {{ $fua->profesional->otroNombreP }} {{ $fua->profesional->apellidoPaternoP }} {{ $fua->profesional->apellidoMaternoP }}</td>
            <td>{{ $fua->created_at }}</td>
            <td>
                <form action="{{ url('/recepcion') }}">

                    <input class="btn btn-outline-success" type="submit" onclick="return confirm('Generar nuevamente este Formato?') " value="Imprimir">
                    
                </form>

                <form action="{{ url('/recepcion/'.$fua->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Quieres eliminar al paciente?')" value="Borrar">

                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td>

            </td>
        </tr>
    </tbody>
</table>
<div>{{$totalFuas->links()}}</div>
@endsection