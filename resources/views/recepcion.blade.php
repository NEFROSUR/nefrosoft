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
            <div class="col">
                    <label for="inputState" class="form-label">Mes</label>
                    <select id="inputState" name="mes" class="form-select p-1 mt-0.5">
                        <option value=''>Todos</option>
                        <option value='01'>Enero</option>
                        <option value='02'>Febrero</option>
                        <option value='03'>Marzo</option>
                        <option value='04'>Abril</option>
                        <option value='05'>Mayo</option>
                        <option value='06'>Junio</option>
                        <option value='07'>Julio</option>
                        <option value='08'>Agosto</option>
                        <option value='09'>Setiembre</option>
                        <option value='10'>Octubre</option>
                        <option value='11'>Noviembre</option>
                        <option value='12'>Diciembre</option>
                        
                    </select>
                </div>

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
                    <input class="btn btn-outline-success" type="submit" onclick="return confirm('¿Deseas imprimir nuevamente este Formato?')" value="🖨️">
                </form>
                <form action="{{ url('/recepcion/'.$fua->id.'/edit') }}" method="GET">
                    <input class="btn btn-outline-warning" type="submit" onclick="return confirm('¿Deseas anotar observacion de esta atencion?')" value="✏️">
                </form>
                <form action="{{ url('/recepcion/'.$fua->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input class="btn btn-outline-danger" type="submit" onclick="return confirm('¿Deseas eliminar completamente esta atencion?')" value="🗑️">

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