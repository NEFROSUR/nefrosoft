
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<div>
    <div>
        <label for="tittle" class="form-label">REGISTRAR KTV</label>
    </div>

    <label for="tittle" class="form-label">{{$item->primerNombre}} {{$item->otroNombre}} {{$item->apellidoPaterno}} {{$item->apellidoMaterno}}</label>
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