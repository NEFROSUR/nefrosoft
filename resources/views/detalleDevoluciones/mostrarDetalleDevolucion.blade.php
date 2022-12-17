@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75"><b>DETALLE DE DEVOLUCION</b></h4>
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
@if(!is_null($detalleDevolucion))
<div class="container border">
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75"><b>DATOS DE LA DEVOLUCION</b></h4>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Guia Interna de Salida</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$devolucion->numDevolucion}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Responsable que registro la salida de almacen</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$devolucion->usuario}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Personal que recepciono el material</label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$devolucion->personalD}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Fecha de Devolucion </label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$devolucion->fechaDevolucion}}">
            </fieldset>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Observaciones de la Devolucion</label>
        </div>
        @php
        if($devolucion->detalle==''){
        $devolucion->detalle="Sin observaciones";
        }
        @endphp
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="{{$devolucion->detalle}}">
            </fieldset>
        </div>
    </div>
    <div class="p-2 row">
        <div class="col">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addDetalleDevolucion">+ Agregar producto</button>
        </div>
        <div class="col text-right">
            <a class="btn btn-success" href="{{url('/detalleDevoluciones/refresh/'.$devolucion->id)}}">
                Actualizar cambios
            </a>
        </div>
    </div>
    <div>
        @livewire('agregar-detalle-devolucion',["devolucion_id"=>$devolucion->id])
        @stack('scripts')
    </div>
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">RESUMEN DEL MATERIAL DE LA DEVOLUCION A ALMACEN</h4>
    </div>
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>Producto</th>
                <th>Cantidad Devuelta</th>
                <th>Unidad de Medida</th>
                <th>Precio de Devolucion</th>
                <th>Observaciones / Detalles</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        @php
        $i = 1;
        @endphp
        <tbody>
            @foreach ($detalleDevolucion as $devolucion)
            <tr>
                <td>{{ $i}}</td>
                <td>{{ $devolucion->producto->nombreProd}}</td>
                <td>{{ $devolucion->cantidadDevuelta}}</td>
                @php
                $medida = "";
                switch ($devolucion->unidadMedida) {
                case 1:
                $medida = "Unidad";
                break;
                case 2:
                $medida = "Galon";
                break;
                case 3:
                $medida = "Caja";
                break;
                case 4:
                $medida = "Blister";
                break;
                }
                @endphp
                <td>{{ $medida}}</td>
                <td>S/. {{ $devolucion->precioDevolucion}} (Nuevos Soles)</td>
                <td>{{ $devolucion->detalle}}</td>
                <td>
                    <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar la cantidad de salida: \n {{ $devolucion->id}}?')" href="{{ url('detalleDevoluciones/'.$devolucion->id.'/edit') }}">
                        ✏️
                    </a>
                </td>
                <td>
                    <form action="{{ url('/detalleDevoluciones/'.$devolucion->id) }}" method="POST">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea eliminar la salida\n {{ $devolucion->producto->nombreProd}}?')" value="🗑️">
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
    <div class="col text-center">
        <a class="btn btn-info" href="{{url('/devoluciones/refresh/')}}">
            Ver lista de Devoluciones
        </a>
    </div>
</div>
{{ $detalleDevolucion->links() }}

@endif
@endsection