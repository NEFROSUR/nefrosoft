<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<div>
    <div>
        <label for="tittle" class="form-label">REGISTRO DEL PACIENTE</label>
    </div>

    <label for="tittle" class="form-label">Nombres del paciente</label>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <input type="text" name="primerNombre" class="form-control" placeholder="Primer Nombre" required>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="otroNombre" class="form-control" placeholder="Segundo Nombre">
        </div>
    </div>
    <label for="tittle" class="form-label">Apellidos del paciente</label>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <input type="text" name="apellidoPaterno" class="form-control" placeholder="Apellido Paterno" required>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="apellidoMaterno" class="form-control" placeholder="Apellido Materno" required>
        </div>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Documento</label>
            <input type="text" name="dni" class="form-control" placeholder="DNI / CE" required>
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Celular</label>
            <input type="text" name="telefono" class="form-control" placeholder="9" minlength="9" maxlength="9">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Celular</label>
            <input type="text" name="telefono1" class="form-control" placeholder="9" minlength="9" maxlength="9">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Celular</label>
            <input type="text" name="telefono2" class="form-control" placeholder="9" minlength="9" maxlength="9">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Fecha de Nacimiento</label>
            <input type="text" name="fechaNacimiento" class="form-control" placeholder="dd-mm-yyyy">
        </div>

    </div>
    <div class="row">
        <div class="col">
            <label for="inputState" class="form-label">
                <Table>Regimen</Table>
            </label>
            <select id="inputState" name="regimen" class="form-select p-1 mt-0.5">
                <option value="subsidiado">SUBSIDIADO</option>
                <option value="semicontributivo">SEMICONTRIBUTIVO</option>
            </select>
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Numero de Afiliacion</label>
            <input type="text" name="numAfiliacion" class="form-control" placeholder="N° de Afiliacion" required>
        </div>
        <div class="col p-2 mt-0.5">
            <div>
                <label for="tittle" class="form-label">Fecha de Vencimiento</label>
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
    </div>
    <label for="tittle" class="form-label">Direccion</label>
    <div class="mb-3 p-2 mt-0.5">
        <input type="text" name="direccion" class="form-control" placeholder="Direccion Reniec" required>
    </div>
    <label for="tittle" class="form-label">Direccion</label>
    <div class="mb-3 p-2 mt-0.5">
        <input type="text" name="direccion1" class="form-control" placeholder="Direccion Reniec Opcional">
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Historia Clinica</label>
            <input type="text" name="numHistoria" class="form-control" placeholder="N° Historia" required>
        </div>
        <div class="col">
            <label for="inputState" class="form-label">Frecuencia</label>
            <select id="inputState" name="frecuencia" class="form-select p-1 mt-0.5">
                <option value="lmv">Lunes - Miecoles - Viernes</option>
                <option value="mjs">Martes - Jueves - Sabado</option>
            </select>
        </div>
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
                    <label for="inputState" class="form-label">Cama</label>
                    <select id="inputState" name="cama" class="form-select p-1 mt-0.5">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                    </select>
                </div>
    </div>
    <div class="p-1 mt-4">
        <button type="submit" class="btn btn-primary " onclick="return confirm('¿Confirmar guardado de paciente?')">Guardar</button>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });
    });
</script>