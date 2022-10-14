<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div>
    <div>
        <label for="tittle" class="form-label">GENERANDO SALIDA DEL PRODUCTO </label>
    </div>
    <div class="row">
        <label for="tittle" class="form-label">Datos de la Salida</label>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Area del Usuario</label>
            <select id="inputState" name="reponsableA" class="form-select p-1 mt-0.5">
                <option>Almacen</option>
                <option>Administracion</option>
                <option>Datos</option>
                <option>Recepcion</option>
                <option>Enfermeria</option>
                <option>Direccion Medica</option>
            </select>
        </div>
        <div class="col">
            <label for="tittle" class="form-label">Nombre del Usuario</label>
            <input type="text" name="responsable" class="form-control">
        </div>
        <div class="row p-2 mt-0.5">
            <div class="col">
                <label for="tittle" class="form-label">Numero de Salida</label>
                <input type="text" name="numSalida" class="form-control" placeholder="0000">
            </div>
            <div>
                <section class="container">

                    <div class="row form-group">
                        <label for="date" class="col-sm-1 col-form-label">Fecha</label>
                        <div class="col-sm-4">
                            <div class="input-group date" id="datepicker">
                                <input type="text" class="form-control" name="fechaSalida">
                                <span class="input-group-append">
                                    <span class="input-group-text bg-white">
                                        <i class="fa fa-calendar"></i>
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Area del Usuario</label>
                <select id="inputState" name="turno" class="form-select p-1 mt-0.5">
                    <option value="1">TURNO 1</option>
                    <option value="2">TURNO 2</option>
                    <option value="3">TURNO 3</option>
                    <option value="4">TURNO 4</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <label for="tittle" class="form-label">Datos del Recepcionista</label>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Area del Recepcionista</label>
            <select id="inputState" name="areaRecepcion" class="form-select p-1 mt-0.5">
                <option>Tecnicos Enfermeria</option>
                <option>Enfermeria</option>
                <option>Direccion Medica</option>
                <option>Administracion</option>
                <option>Datos</option>
                <option>Recepcion</option>
                <option>Almacen</option>
            </select>
        </div>
        <div class="col">
            <label for="tittle" class="form-label">Nombre del Recepcionista</label>
            <input type="text" name="recepcionista" class="form-control">
        </div>
        <div class="col">
            <label for="tittle" class="form-label">Area destino</label>
            <select id="inputState" name="areaDestino" class="form-select p-1 mt-0.5">
                <option>Tecnicos Enfermeria</option>
                <option>Enfermeria</option>
                <option>Direccion Medica</option>
                <option>Administracion</option>
                <option>Datos</option>
                <option>Recepcion</option>
                <option>Almacen</option>
            </select>
        </div>
    </div>
    <div class="col">
        <label for="tittle" class="form-label">Detalle del Destino</label>
        <input type="text" name="detalle" class="form-control">
    </div>
</div>
<div class="text-center p-1 mt-4">
    <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Salida?')">Generar Salida</button>
</div>