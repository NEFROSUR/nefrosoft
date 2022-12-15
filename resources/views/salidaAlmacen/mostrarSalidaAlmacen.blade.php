@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">LISTA DE SALIDAS POR PAQUETE</h4>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <p><strong>Opps: No se pudo realizar la accion</strong></p>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container">
    <div class="navbar navbar-light float right">
        <form class="d-flex" role="search">
            <div class="row p-2.5 m-1">
                <label for="inputState" class="form-label"><b>Busca por Numero de Salida</b></label>
            </div>
            <div class="row p-2 m-1">
                <input name="numSalida" class="form-control" type="search" placeholder="Codigo de Salida" aria-label="Search">
            </div>
            <div class="row p-2 m-1">
                <button class="btn btn-outline-success" type="submit">Filtrar</button>
            </div>
        </form>
    </div>
    <div class="col p-2.5 m-1">
        <a class="btn btn-outline-primary" href="/exportarSalidas">Exportar Salidas de Almacen</a>
    </div>
</div>
@if(!is_null($salidasAll))
<div class="container">
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N° DE SALIDA</th>
                <th>FECHA DE SALIDA</th>
                <th>TURNO DE LA SALIDA</th>
                <th>RESPONSABLE DE LA ENTREGA</th>
                <th>RESPONSABLE DE LA RECEPCION</th>
                <th>DESTINO DEL MATERIAL</th>
                <th>OBSERVACIONES</th>
                <th>VER</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($salidasAll as $salida)
            <tr>
                <td>{{ $salida->numSalida}}</td>
                <td>{{ $salida->fechaSalida}}</td>
                <td>TURNO {{ $salida->turno}}</td>
                <td>{{ $salida->reponsableA}}: {{$salida->responsable}}</td>
                <td>{{ $salida->areaRecepcion}}: {{$salida->recepcionista}}</td>
                <td>{{ $salida->areaDestino}}</td>
                <td>{{ $salida->detalle}}</td>
                <td>
                    <form action="{{ url('detalleSalidaAlmacen/show/'.$salida->id) }}">
                        <input class="btn btn-outline-primary" type="submit" value="👁️">
                    </form>
                </td>
                <td>
                    <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar la Salida: \n {{ $salida->numSalida}}?')" href="{{ url('salidaAlmacen/'.$salida->id.'/edit') }}">
                        ✏️
                    </a>
                </td>
                <td>
                    <form action="{{ url('/salidaAlmacen/'.$salida->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea eliminar al Ingreso\n {{ $salida->id}}?')" value="🗑️">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $salidasAll->links() }}
@endif
@endsection