@extends('main')
@section('content')
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
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">MOVIMIENTOS DEL PRODUCTO: "{{$producto->nombreProd}}" CON CODIGO: "{{$producto->codigoProd}}"
        <a class="btn btn-dark" href="{{url('/almacen/back')}}">Volver</a>
    </h4>
    <div class="col p-3.5 m-2 right">
        <a class="btn btn-info" href="{{url('/download/'.$producto->id)}}">Exportar Movimientos</a>
    </div>
</div>
<div class="container border w-100 text-center">
    <div class="row">
        <div class="col">
            <div class="text-center">
                <h4 class="bg-success p-2 text-white bg-opacity-75">INGRESOS</h4>
            </div>
            @php
            if($ingresosReales==null){
            $msj1 = "NO SE REGISTRARON INGRESOS";
            }else{
            $msj1="true";
            }
            @endphp
            <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
                <thead class="thead-light">
                    <tr>
                        <th>N°</th>
                        <th>Numero de Factura</th>
                        <th>Cantidad Entrada</th>
                        <th>Fecha de Ingreso</th>
                        <th>Costo Total de la Factura</th>
                        <th>Lote y Vencimiento</th>
                    </tr>
                </thead>
                @php
                $i = 1;
                @endphp
                <tbody>
                    @foreach ($ingresosReales as $ingreso)
                    <tr>
                        <td>{{ $i}}</td>
                        <td>{{ $ingreso->numFactura}}</td>
                        <td>{{ $ingreso->cantidad}}</td>
                        <td>{{ $ingreso->fechaIngreso}}</td>
                        <td>{{ $ingreso->total}}</td>
                        <td>{{ $ingreso->lote}}: Vence: {{ $ingreso->fechaVencimiento}}</td>
                    </tr>
                    @php
                    $i = $i+1;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            @if ($msj1!="true")
            <div class="bg-danger p-2 text-white"><b>{{$msj1}}</b></div>
            @endif
        </div>
        <div class="col">
            <div class="text-center">
                <h4 class="bg-warning p-2 text-white bg-opacity-75">SALIDAS</h4>
            </div>
            @php
            if($salidasReales==null){
            $msj = "NO SE REGISTRARON SALIDAS";
            }else{
            $msj="true";
            }
            @endphp
            <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
                <thead class="thead-light">
                    <tr>
                        <th>N°</th>
                        <th>Guia Interna de Salida</th>
                        <th>Cantidad de Salida</th>
                        <th>Fecha de Salida</th>
                        <th>Personal Encargado</th>
                        <th>Destino</th>
                    </tr>
                </thead>
                @php
                $j = 1;
                @endphp
                <tbody>
                    @foreach ($salidasReales as $salida)
                    <tr>
                        <td>{{ $j}}</td>
                        @php
                        if($salida->numSalida == ''){
                        $salida->numSalida = $salida->guiaInterna;
                        }
                        @endphp
                        <td>{{ $salida->numSalida}}</td>
                        <td>{{ $salida->cantidad}}</td>
                        @php
                        if($salida->fechaSalida == ''){
                        $salida->fechaSalida = $salida->created_at;
                        }
                        if($salida->destino != ''){
                        $salida->fechaSalida = $salida->fechaSalida->format('Y-m-d');
                        $salida->fechaSalida = $salida->fechaSalida . " Entrega unitaria a: " . $salida->destino;
                        }
                        @endphp
                        <td>{{ $salida->fechaSalida}}</td>
                        <td>{{ $salida->areaRecepcion}} : {{ $salida->recepcionista}}</td>
                        <td>{{ $salida->des}}</td>
                    </tr>
                    @php
                    $j = $j+1;
                    @endphp
                    @endforeach
                </tbody>
            </table>
            @if ($msj!="true")
            <div class="bg-danger p-2 text-white"><b>{{$msj}}</b></div>
            @endif
        </div>
    </div>
</div>

@endsection