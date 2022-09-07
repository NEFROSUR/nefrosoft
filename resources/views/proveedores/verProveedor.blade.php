@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-info p-2 text-white bg-opacity-75">LISTA DE PROVEEDORES</h4>
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
            <input name="nameProv" class="form-control me-2" type="search" placeholder="Nombre Proveedor" aria-label="Search">
            <input name="rucProv" class="form-control me-2" type="search" placeholder="RUC" aria-label="Search">
            <div class="form-group">
                <div class="col">
                    <label for="inputState" class="form-label">Categoria</label>
                    <select id="inputState" name="categoriaProv" class="form-select p-1 mt-0.5">
                        <option value=''>Todos</option>
                        <option>Categoria1</option>
                        <option>Categoria2</option>
                        <option>Categoria3</option>
                        <option>Categoria4</option>
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
                <th>N°</th>
                <th>Nombre Proveedor</th>
                <th>RUC</th>
                <th>Direccion</th>
                <th>Correo del Proveedor</th>
                <th>Telefono</th>
                <th>Categoria</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($proveedorAll as $proveedor)
            <tr>
                <td>{{ $proveedor->id}}</td>
                <td>{{ $proveedor->nameProv}}</td>
                <td>{{ $proveedor->rucProv}}</td>
                <td>{{ $proveedor->direccionProv}}</td>
                <td>{{ $proveedor->correoProv}}</td>
                <td>{{ $proveedor->telefonoProv}}</td>
                <td>{{ $proveedor->categoriaProv}}</td>
                <td>
                <a class="btn btn-outline-warning" onclick="return confirm('¿Esta seguro que quiere editar al Proveedor: \n {{ $proveedor->nameProv}}?')" href="{{ url('proveedores/'.$proveedor->id.'/edit') }}">
                    Actualizar
                </a>
                <form action="{{ url('/proveedores/'.$proveedor->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea eliminar al Proveedor\n {{ $proveedor->nameProv}}?')" value="Borrar">

                </form>
                    <form>
                        <input class="btn btn-outline-primary" type="submit" value="Detalle">

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{ $proveedorAll->links() }}
@endsection