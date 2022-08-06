@extends('main')
@section('content')
<div class="text-center">
    <h4 class="bg-warning p-2 text-dark bg-opacity-75">LISTA DE ATENCIONES</h4>
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


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<div style="float: left; width: 100%">
    <div class="container w-75 border p-2 mt-4">
        <form>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Filtrar Pacientes para Formatos de Atencion</label>
                <div class="col">
                    <label for="inputState" class="form-label">Frecuencia</label>
                    <select id="inputState" name="frecuencia" class="form-select p-1 mt-0.5">
                        <option value=''>Todos</option>
                        <option value="lmv">Lunes - Miecoles - Viernes</option>
                        <option value="mjs">Martes - Jueves - Sabado</option>
                    </select>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="inputState" class="form-label">Turno</label>
                        <select id="inputState" name="turno" class="form-select p-1 mt-0.5">
                            <option value=''>Todos</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                        </select>
                    </div>
                </div>
                <div class="col">
                    <button class="btn btn-outline-primary" type="submit" id="filtro">Filtrar</button>
                </div>
            </div>

            <table class="table table-light ">
                <thead class="thead-light">
                    <tr>
                        <th>Paciente</th>
                        <th>Marcar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista_pacientes as $item)
                    <tr>
                        <td>{{ $item->apellidoPaterno}} {{ $item->apellidoMaterno}}, {{ $item->primerNombre}} {{ $item->otroNombre}}</td>
                        <td>
                            <div class="form-check" method="POST">
                                <input class="form-check-input" type="checkbox" value="{{$item->id}}" name="pacientesEscogidos[]" id="pacientesEscogidos">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tr>
                </tbody>
            </table>

            <div class="form-group">
                <div class="container col p-2 mt-0.5">
                    <div class="col">
                        <div>
                            <section class="container">
                                <form>
                                    <div class="row form-group">
                                        <label for="date" class="col-sm-1 col-form-label">Fecha</label>
                                        <div class="col-sm-4">
                                            <div class="input-group date" id="datepicker">
                                                <input type="text" class="form-control" name="fechaGenerada">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                        <div>
                            <div class="form-group">
                                <div class="col">
                                    <label for="inputState" class="form-label">Profesional</label>
                                    <select id="inputState" name="medico" class="form-select p-1 mt-0.5">
                                        @foreach ($medicos as $item)
                                        <option value={{$item->id}}>{{$item->primerNombreP}} {{$item->otroNombreP}} {{$item->apellidoPaternoP}} {{$item->apellidoMaternoP}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label for="inputState" class="form-label">Tipo de Consulta</label>
                                <select id="inputState" name="tipoDeConsulta" class="form-select p-1 mt-0.5">

                                    <!--@if ($item->especialidad === 'Nefrologia               ')-->
                                    <option value='Atencion de Procedimientos Ambulatorios'>Atencion de Procedimientos Ambulatorios</option>
                                    <option value='Consulta Externa'>Consulta Externa</option>
                                    <!--@else
                                    <option value='Consulta Externa'>Consulta Externa</option>
                                    @endif-->
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-primary" id="carga">Guardar</button>
                </div>
            </div>

        </form>
        <div class="p-2 text-dark bg-opacity-75">
            <form action="{{ url('/recepcion/show') }}">
                <button type="submit" class="btn btn-outline-success">Limpiar</button>
            </form>
        </div>
        <div class="p-2 text-dark bg-opacity-75">
            <form action="{{ url('/recepcion') }}">
                <button type="submit" class="btn btn-outline-primary">Salir</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(function() {
            $('#datepicker').datepicker({
                format: 'dd-mm-yyyy'
            });
        });
    </script>

    @endsection