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
@if(!is_null($detalleSalidaAlmacen))
<div class="container border">
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">DATOS DE LA SALIDA</h4>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Guia Interna de Salida</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$salida->numSalida}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Responsable que registro la salida de almacen</label>
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
            <label for="tittle" class="form-label">Turno donde se genero la salida</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Turno: {{$salida->turno}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Fecha y Hora </label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$salida->updated_at}}">
            </fieldset>
        </div>
    </div>
    <div class="p-2 row">
        <div class="col">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addProductoS">+ Agregar producto</button>
        </div>
        <div class="col text-right">
            <a class="btn btn-success" href="{{ url('detalleSalidaAlmacen/refresh/'.$salida->id)}}">
                Actualizar cambios
            </a>
        </div>
    </div>

    <div>
        @livewire('agregar-producto-s',["salida_id"=>$salida->id])
        @stack('scripts')
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
                <th>Area de Destino</th>
                <th>Precio Salida</th>
                <th>Observaciones / Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        @php
        $i = 1;
        @endphp
        <tbody>
            @foreach ($detalleSalidaAlmacen as $detalle)
            <tr>
                <td>{{ $i}}</td>
                <td>{{ $detalle->producto->nombreProd}}</td>
                <td>{{ $detalle->cantidad}}</td>
                <td>{{ $detalle->um}}</td>
                <td>{{ $detalle->destino}}</td>
                <td>S/. {{ $detalle->precioSalida}} (Nuevos Soles)</td>
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
            @php
            $i = $i+1;
            @endphp
            @endforeach
        </tbody>
    </table>
    @if (session()->has('error'))
    <div class="alert alert-danger text center">{{session('error')}}</div>
    @endif
</div>
{{ $detalleSalidaAlmacen->links() }}

@endif
@endsection