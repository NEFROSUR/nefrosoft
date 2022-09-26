<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="{{ mix('js/app.js') }}"></script>
<div>
    <div>
        <label for="tittle" class="form-label">GENERANDO SALIDA DEL PRODUCTO {{$producto->codigoProd}}: {{$producto->nombreProd}} </label>
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
                <label for="tittle" class="form-label">Fecha de Salida</label>
                <input type="text" name="fechaSalida" class="form-control" placeholder="dd/mm/aaaa">
            </div>
            <div class="col">
                <label for="tittle" class="form-label">Numero de Salida</label>
                <input type="text" name="numSalida" class="form-control" placeholder="0000">
            </div>
        </div>
    </div>
    <div class="row">
        <label for="tittle" class="form-label">Datos del Producto</label>
    </div>
    <div class="row">
        <div class="col">
            <label for="tittle" class="form-label">Cantidad del Producto</label>
            <input type="text" name="cantidad" class="form-control" placeholder="0000">
        </div>
        <div class="col">
            <label for="tittle" class="form-label">Presentacion del Producto</label>
            <select id="inputState" name="um" class="form-select p-1 mt-0.5">
                <option>unidad</option>
                <option>galon</option>
                <option>caja</option>
                <option>blister</option>
            </select>
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
    </div>
    <div class="row">
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
        <div class="col">
            <label for="tittle" class="form-label">Detalle del Destino</label>
            <input type="text" name="detalle" class="form-control">
        </div>
    </div>
</div>
<div class="text-center p-1 mt-4">
    <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Registrar Salida?')">Generar Salida</button>
</div>