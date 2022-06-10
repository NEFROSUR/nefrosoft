@extends('main')
@section('content')
<div style="float: left; width: 50%">
    <div class="container w-75 border p-2 mt-4">
        <form>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Lista de Pacientes por turno</label>
                <div class="col">
                    <label for="inputState" class="form-label">Turno</label>
                    <select id="inputState" name="turno" class="form-select p-1 mt-0.5">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    </select>
                </div>
                <div class="col">
                    <button class="btn btn-outline-primary" type="submit">Filtrar</button>
                </div>
            </div>
            <select multiple class="form-control" name="pacientesEscogidos[]" id="pacientesEscogidos">
            @foreach ($pacientes as $paciente)
                <option>{{ $paciente->primerNombre}}</option>
            @endforeach
            </select>
        <div class="form-group">
                <div class="container col p-2 mt-0.5">
                    <div class="row">
                        <div class="col">
                        <input name="correlativoI" class = "form-control col p-2 mt-0.5" type="text"placeholder="Correlativo Inicial">
                        </div>
                        <div class="col">
                        Hasta
                        </div>
                        <div class="col">
                        <input name="correlativoF" class = "form-control col p-2 mt-0.5" type="text"placeholder="Correlativo Final">
                        </div>
                    </div>
                </div>
            </div>
        <div>
            <button type="submit" class="btn btn-outline-primary">Guardar</button>
        </div>
    </form>
</div>
</div style="float: right">
    <div>
        <div>
            <!--@include('recepcion.formFua')-->
        </div>
    </div>    
</div> 
@endsection