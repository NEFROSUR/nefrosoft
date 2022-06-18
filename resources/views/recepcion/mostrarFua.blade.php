@extends('main')
@section('content')
<div class="text-center">
<h4 class="bg-warning p-2 text-dark bg-opacity-75">LISTA DE ATENCIONES</h4>
</div> 
<div style="float: left; width: 50%">
    <div class="container w-75 border p-2 mt-4">
        <form>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Filtrar Pacientes para Formatos de Atencion</label>
                <div class="col">
                    <label for="inputState" class="form-label">Turno</label>
                    <select id="inputState" name="turno" class="form-select p-1 mt-0.5">
                    <option value=''>Todos</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    </select>
                </div>
                
            <div class="form-group">
                <div class="col">
                    <label for="inputState" class="form-label">Frecuencia</label>
                    <select id="inputState" name="frecuencia" class="form-select p-1 mt-0.5">
                        <option value=''>Todos</option>
                        <option value="lmv">Lunes - Miecoles - Viernes</option>
                        <option value="mjs">Martes - Jueves - Sabado</option>
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
                    <td>{{ $item->primerNombre}} {{ $item->otroNombre}} {{ $item->apellidoPaterno}} {{ $item->apellidoMaterno}}</td>
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
                    <div class="row">
                        <div class="col">
                        <input name="correlativoI" class = "form-control col p-2 mt-0.5" type="text"placeholder="Correlativo Inicial" >
                        </div>
                        <div class="form-group">
                            <div class="col">
                                <label for="inputState" class="form-label">Tipo de Consulta</label>
                                <select id="inputState" name="tipoDeConsulta" class="form-select p-1 mt-0.5">
                                <option value='Consulta Externa'>Consulta Externa</option>
                                <option value='Atencion de Procedimientos Ambulatorios'>Atencion de Procedimientos Ambulatorios</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div>
            <button type="submit" class="btn btn-outline-primary" id="carga">Guardar</button>
        </div>
    </form>
</div>
</div style="float: right">
    <div>
        <div>
        </div>
    </div>    
</div> 
@endsection