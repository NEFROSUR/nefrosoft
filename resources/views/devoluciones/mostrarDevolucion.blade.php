@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">DEVOLUCIONES</h4>
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
    <div class="row">
        <div class="row p-1 m-1 navbar navbar-light float right">
            <form class="d-flex" role="search">
                <div class="col p-2.5 m-1">
                    <label for="inputState" class="form-label"><b>Busca por Numero de Devolucion</b></label>
                    <input name="numDevolucion" class="form-control" type="search" placeholder="Codigo de Devolucion" aria-label="Search">
                </div>
                <div class="col p-3.5 m-1">
                    <button class="btn btn-success" type="submit">Filtrar</button>
                </div>
            </form>
        </div>
        <div class="row m-2">
            <h3 class="bg-info p-2 text-white bg-opacity-75">OPCIONES</h3>
            <div class="col p-3.5 m-2">
                <a class="btn btn-primary" href="">Exportar Devoluciones</a>
            </div>
            <div class="col p-3.5 m-2">
                <a class="btn btn-primary" href="">+ Nueva Devolucion</a>
            </div>
            <div class="col p-3.5 m-2">
                <a class="btn btn-primary" href="{{url('devoluciones/refresh/')}}">Actualizar</a>
            </div>
        </div>
    </div>
</div>
@if(!is_null($devolucionesAll))
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
            @foreach ($devolucionesAll as $devolucion)
            <tr>
                <td>{{ $devolucion->id}}</td>

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
{{ $devolucionesAll->links() }}
@endif
@endsection