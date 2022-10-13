@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">LISTA DE SALIDAS</h4>
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
                <label for="inputState" class="form-label">Busca por codigo</label>
                <input name="codigoProd" class="form-control me-2" type="search" placeholder="Código del Producto" aria-label="Search">
            </div>

            <div class="form-group">
                <div class="col">
                    <label for="inputState" class="form-label">Categoria</label>
                    <select id="inputState" name="categoria_id" class="form-select p-1 mt-0.5">
                        <option value=" ">Todos</option>
                        <option value="1">Medicamentos</option>
                        <option value="2">Desechables médicos</option>
                        <option value="3">Limpieza</option>
                        <option value="4">Oficina</option>
                        <option value="5">Farmacia</option>
                        <option value="6">Soluciones</option>
                        <option value="7">Insumos de MH</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-outline-success" type="submit">Filtrar</button>
        </form>
    </div>


</div>
<div class="container">
    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N° DE SALIDA</th>
                <th>FECHA DE SALIDA</th>
                <th>RESPONSABLE DE LA ENTREGA</th>
                <th>RESPONSABLE DE LA RECEPCION</th>
                <th>DESTINO DEL MATERIAL</th>
                <th>-</th>

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
                            <input class="btn btn-outline-success" type="submit" value="➕">
                        </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $salidasAll->links() }}

@endsection