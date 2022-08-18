<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<div>
    <div>
        <label for="tittle" class="form-label">REGISTRAR DATOS DE CONSULTA NEFROLOGICA</label>
    </div>

    <label for="tittle" class="form-label">Seleccione paciente</label>
    <div class="col">
        <label for="inputState" class="form-label">Pacientes</label>
        <select id="inputState" name="paciente_id" class="form-select p-1 mt-0.5">
            @foreach ($pacientes as $item)
            <option value={{$item->id}}>{{$item->primerNombre}} {{$item->otroNombre}} {{$item->apellidoPaterno}} {{$item->apellidoMaterno}}</option>
            @endforeach
        </select>
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
    <form action="{{ url('/consultaCN/create') }}">
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