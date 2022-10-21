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
            <div class="col">
                <label for="inputState" class="form-label">Busca por Numero de Salida</label>
                <input name="numSalida" class="form-control me-2" type="search" placeholder="Codigo de Salida" aria-label="Search">
            </div>

            <button class="btn btn-outline-success" type="submit">Filtrar</button>
        </form>
    </div>
</div>
@if(!is_null($salidasAll))
<div class="container">
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N° DE SALIDA</th>
                <th>FECHA DE SALIDA</th>
                <th>RESPONSABLE DE LA ENTREGA</th>
                <th>RESPONSABLE DE LA RECEPCION</th>
                <th>DESTINO DEL MATERIAL</th>
                <th>AGREGAR PRODUCTO</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($salidasAll as $salida)
            <tr>
                <td>{{ $salida->numSalida}}</td>
                <td>{{ $salida->fechaSalida}}</td>
                <td>{{ $salida->reponsableA}}: {{$salida->responsable}}</td>
                <td>{{ $salida->areaRecepcion}}</td>
                <td>{{ $salida->areaDestino}}</td>
                <td>
                <form action="{{ url('detalleSalidaAlmacen/create/'.$salida->id) }}">
                            <input class="btn btn-outline-danger" type="submit" value="➕">
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