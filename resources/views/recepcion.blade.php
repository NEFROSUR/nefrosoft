@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">LISTA DE FORMATOS DE ATENCION</h4>
</div>
<div class="container">
    <label for="exampleFormControlSelect2">Busqueda</label>
    <div class="navbar navbar-light float right">
        <form class="d-flex" role="search">
            <input name="correlativo" class="form-control me-2" type="search" placeholder="Correlativo" aria-label="Search">
            <input name="documento" class="form-control me-2" type="search" placeholder="documento" aria-label="Search">

            <button class="btn btn-outline-success" type="submit">Filtrar</button>
        </form>

    </div>
</div>
<div class="container ">
<table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
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
            
                <form action="{{ url('/recepcion/pdfunit/'.$fua->id) }}" method="GET">
                    <input class="btn btn-outline-success" type="submit" onclick="return confirm('¿Deseas imprimir nuevamente este Formato?')" value="Imprimir">
                </form>
                <form action="{{ url('/recepcion/'.$fua->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Deseas cancelar esta atencion?')" value="Borrar">

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
</div>
<div class="container">{{$totalFuas->links()}}</div>
@endsection