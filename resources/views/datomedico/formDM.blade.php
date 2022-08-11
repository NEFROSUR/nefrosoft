
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<div>
    <div>
        <label for="tittle" class="form-label">REGISTRAR DATOS MEDICOS POR MES</label>
    </div>

    <label for="tittle" class="form-label">Seleccione paciente</label>
    <div class="col">
        <label for="inputState" class="form-label">Pacientes</label>
        <select id="inputState" name="paciente_id" class="form-select p-1 mt-0.5">
            @foreach ($pacientes as $item)
            <option value={{$item->id}}>{{$item->primerNombre}} {{$item->otroNombre}} {{$item->apellidoPaterno}} {{$item->apellidoMaterno}}</option>
            @endforeach
        </select>

        <select id="inputState" name="mes" class="form-select p-1 mt-0.5">
            <option value=1>Enero</option>
            <option value=2>Febrero</option>
            <option value=3>Marzo</option>
            <option value=4>Abril</option>
            <option value=5>Mayo</option>
            <option value=6>Junio</option>
            <option value=7>Julio</option>
            <option value=8>Agosto</option>
            <option value=9>Setiembre</option>
            <option value=10>Octubre</option>
            <option value=11>Noviembre</option>
            <option value=12>Diciembre</option>
        </select>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Fecha de Ingreso</label>
            <input type="text" name="fechaIngreso" class="form-control" placeholder="dd-mm-yyyy" required>
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Tipo de Acceso</label>
            <select id="inputState" name="tipoAcceso" class="form-select p-1 mt-0.5">
                <option value=1>Fistula</option>
                <option value=2>CBC Temporal</option>
                <option value=3>CBC Permanente</option>
            </select>
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Tamaño de Filtro</label>
            <select id="inputState" name="tipoAcceso" class="form-select p-1 mt-0.5">
                <option value=1>1.8</option>
                <option value=2>2.0</option>
            </select>
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Transaminaza</label>
            <input type="text" name="transaminaza" class="form-control" minlength="1">
        </div>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <label for="inputState" class="form-label">Datos de Consulta Nefrologica</label>
        </div>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <div>
                <label for="tittle" class="form-label">Fecha de Consulta Nefrologica</label>
                <section class="container">
                    <form>
                        <div class="row form-group">
                            <div class="col">
                                <div class="input-group date" id="datepicker">
                                    <input type="text" class="form-control" name="fechaAfiliacion">
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
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Hierro</label>
            <input type="text" name="hierroM" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Epoetina</label>
            <input type="text" name="epoM" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Vitamina</label>
            <input type="text" name="vitM" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <label for="inputState" class="form-label">Datos de KTV</label>
        </div>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Ultrafiltado</label>
            <input type="text" name="ultrafiltrado" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">QB</label>
            <input type="text" name="qb" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">QD</label>
            <input type="text" name="qd" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">OCM</label>
            <input type="text" name="ocm" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Presion Inicial</label>
            <input type="text" name="presionIni" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Tiempo de Dialisis</label>
            <input type="text" name="tiempoHemodialisis" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Diuresis Residual</label>
            <input type="text" name="diuresisResidual" class="form-control">
        </div>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Hemoglobina</label>
            <input type="text" name="hemoglobina" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Hematocrito</label>
            <input type="text" name="hematocrito" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Calcio Serico</label>
            <input type="text" name="calcioSerico" class="form-control">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Pharatormona</label>
            <input type="text" name="pharatormona" class="form-control">
        </div>

    </div>
    <div class="row">
        <div class="row">
            <div class="col p-2 mt-0.5">
                <label for="inputState" class="form-label">Enfermedades</label>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="hiv" id="hiv">
                    <label class="form-check-label" for="flexCheckDefault">
                        HIV
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="hepatitisB" id="hepatitisB">
                    <label class="form-check-label" for="flexCheckDefault">
                        Hepatitis B
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="hepatitisC" id="hepatitisC">
                    <label class="form-check-label" for="flexCheckDefault">
                        Hepatitis C
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="tbc" id="tbc">
                    <label class="form-check-label" for="flexCheckDefault">
                        TBC
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="covid" id="covid">
                    <label class="form-check-label" for="flexCheckDefault">
                        COVID 19
                    </label>
                </div>
                <div class="row p-2 mt-0.5">
                    <label for="tittle" class="form-label">Observaciones</label>
                    <input type="text" name="observaciones" class="form-control">
                </div>
            </div>
        </div>
    </div>
    <form action="{{ url('/datomedico/create') }}">
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>

</div>
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });
    });
</script>