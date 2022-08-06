@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">MOSTRAR DOCTORES Y MULTIDISCIPLINARIOS</h4>
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
<div>
    <div class="navbar navbar-light float right">
        <form class="d-flex" role="search">
            <input name="nombre" class="form-control me-2" type="search" placeholder="Nombre" aria-label="Search">
            <input name="dni" class="form-control me-2" type="search" placeholder="Documento" aria-label="Search">
            <div class="form-group">
                <div class="col">
                    <label for="inputState" class="form-label">Especialidad</label>
                    <select id="inputState" name="especialidad" class="form-select p-1 mt-0.5">
                        <option value=''>Todos</option>
                        <option >Nefrologia</option>
                        <option >Nutricion</option>
                        <option >Psicologia</option>
                        <option >Trabajo Social</option>
                    </select>
                </div>
            </div>
            <button class="btn btn-outline-success" type="submit">Filtrar</button>
        </form>

    </div>


</div>
<table class="table table-light table-hover ">
    <thead class="thead-light">
        <tr>
            <th>N°</th>
            <th>Primer Nombre</th>
            <th>Segundo Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Documento de Identidad</th>
            <th>Direccion</th>
            <th>Telefono de Contacto</th>
            <th>Colegiatura</th>
            <th>Especialidad</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($doctoresAll as $doctor)
        <tr>
            <td>{{ $doctor->id}}</td>
            <td>{{ $doctor->primerNombreP}}</td>
            <td>{{ $doctor->otroNombreP}}</td>
            <td>{{ $doctor->apellidoPaternoP}}</td>
            <td>{{ $doctor->apellidoMaternoP}}</td>
            <td>{{ $doctor->dniP}}</td>
            <td>{{ $doctor->direccionP}}</td>
            <td>{{ $doctor->telefonoP}}</td>
            <td>{{ $doctor->colegiatura}}</td>
            <td>{{ $doctor->especialidad}}</td>
            <td>

                <form action="{{ url('/profesionales/'.$doctor->id) }}" method="POST">
                    @csrf
                    {{ method_field('DELETE')}}
                    <input class="btn btn-outline-danger" type="submit" onclick="return confirm('Seguro desea inhabilitar al profesional\n {{ $doctor->primerNombreP}} {{ $doctor->apellidoPaternoP}}?')" value="Borrar">

                </form>
                <form>
                    <input class="btn btn-outline-primary" type="submit" value="Detalle">

                </form>
            </td>
        </tr>
        @endforeach
        <tr>
            <td>

            </td>
        </tr>
        <div>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </tbody>
</table>
@endsection