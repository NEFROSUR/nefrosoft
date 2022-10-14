@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">DETALLE DE SALIDA</h4>
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
<div class="container w-30 p-4 mt-4">
    <h4 class="bg-info p-2 text-white bg-opacity-75">BUSQUEDA POR SALIDA</h4>
    <div class="navbar navbar-light float right">
        <form class="d-flex" role="search">
            <input name="numSalida" class="form-control me-2" type="search" placeholder="Numero de Salida" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>
</div>
@if(!is_null($detalleSalidaAlmacen))
<div class="container border">
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">DATOS DE LA SALIDA</h4>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Numero de Salida</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$salida->numSalida}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Usuario que registro la salida de almacen</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$salida->reponsableA}}: {{$salida->responsable}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Personal que recepciono el material</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$salida->areaRecepcion}}: {{$salida->recepcionista}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Area a la que esta destinado el material</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$salida->areaDestino}}">
            </fieldset>
        </div>
    </div>
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">RESUMEN DEL MATERIAL DE LA SALIDA DE ALMACEN</h4>
    </div>
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Producto</th>
                <th>Cantidad Salida</th>
                <th>Unidad de Medida</th>
                <th>Area Objetivo</th>
                <th>Precio Salida</th>
                <th>Observaciones / Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($detalleSalidaAlmacen as $detalle)
            <tr>
                <td>{{ $detalle->id}}</td>
                <td>{{ $detalle->producto->nombreProd}}</td>
                <td>{{ $detalle->cantidad}}</td>
                <td>{{ $detalle->um}}</td>
                <td>{{ $detalle->destino}}</td>
                <td>{{ $detalle->precioSalida}}</td>
                <td>{{ $detalle->detalle}}</td>
                <td>
                    <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar la cantidad de salida: \n {{ $detalle->id}}?')" href="{{ url('detalleSalidaAlmacen/'.$detalle->id.'/edit') }}">
                        ✏️
                    </a>

                </td>
                <td>
                    <form action="{{ url('/detalleSalidaAlmacen/'.$detalle->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea eliminar la salida\n {{ $detalle->producto->nombreProd}}?')" value="🗑️">

                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $detalleSalidaAlmacen->links() }}

@endif
@endsection