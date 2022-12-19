@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">INVENTARIO</h4>
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
<div class="container border">
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
        <div class="col p-3.5 m-2 right">
            <a class="btn btn-info" href="{{url('/almacen/back')}}">Actualizar</a>
        </div>
    </div>

</div>
<div class="container border w-auto">
    <div class="text-center">
        <h4 class="bg-info p-2 text-white bg-opacity-75">INVENTARIO DETALLE</h4>
    </div>
    @php
    $totalC = 0.0
    @endphp
    @foreach ($productoAll as $producto)
    @php
    $precioTotalStock = $producto->stock * $producto->precioProm;
    $totalC = $precioTotalStock + $totalC
    @endphp
    @endforeach
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label"><b>Total Precio en Stock</b></label>
        </div>
        <div class="col">
            <fieldset disabled>
                <input type="text" id="disabledTextInput" class="form-control" placeholder="S/. {{$total}} Soles">
            </fieldset>
        </div>
    </div>

    <table class="table table-condensed table-hover table-bordered w-auto small rounded-md">
        <thead class="thead-light">
            <tr>
                <th>N°</th>
                <th>CODIGO DEL PRODUCTO</th>
                <th>NOMBRE DEL PRODUCTO</th>
                <th>STOCK EN ALMACEN</th>
                <th>PRECIO UNITARIO PROMEDIO</th>
                <th>PRECIO TOTAL EN STOCK</th>
                <th>ULTIMA ACTUALIZACION</th>
                <th>E / S</th>
                <th>SALIDA X UND.</th>
            </tr>
        </thead>
        @php
        $i = 1;
        @endphp
        <tbody>
            @foreach ($productoAll as $producto)
            <tr>
                <td>{{ $i}}</td>
                <td>{{ $producto->codigoProd}}</td>
                <td>{{ $producto->nombreProd}}</td>
                <td>{{ $producto->stock}} Unidades</td>
                <td>S/.{{ $producto->precioProm}} Soles</td>
                <td>
                    @php
                    $precioTotalStock = $producto->stock * $producto->precioProm;
                    @endphp
                    S/.{{$precioTotalStock}} Soles
                </td>
                <td>{{ $producto->updated_at}}</td>
                <td>
                    <form action="{{ url('almacen/'.$producto->id.'/edit') }}">
                        <input class="btn btn-outline-success" type="submit" value="⇅ Movimientos">
                    </form>
                </td>
                <td>
                    <form action="{{ url('salidaUnitaria/create/'.$producto->id) }}">
                        <input class="btn btn-outline-primary" type="submit" value="➪">
                    </form>
                </td>
            </tr>
            @php
            $i = $i+1;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
{{ $productoAll->links() }}

@endsection