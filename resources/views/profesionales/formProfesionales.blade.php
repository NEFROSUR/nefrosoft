<div>
    <div>
        <label for="tittle" class="form-label">REGISTRO DEL DOCTOR</label>
    </div>

    <label for="tittle" class="form-label">Nombres del Doctor</label>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <input type="text" name="primerNombreP" class="form-control" placeholder="Primer nombre" required>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="otroNombreP" class="form-control" placeholder="Segundo nombre">
        </div>
    </div>
    <label for="tittle" class="form-label">Apellidos del Doctor</label>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <input type="text" name="apellidoPaternoP" class="form-control" placeholder="Primer apellido" required>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="apellidoMaternoP" class="form-control" placeholder="Segundo apellido" required>
        </div>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Documento</label>
            <input type="text" name="dniP" class="form-control" placeholder="DNI / CE" required>
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Colegiatura</label>
            <input type="text" name="colegiatura" class="form-control" placeholder="colegiatura" required>
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Celular</label>
            <input type="text" name="telefonoP" class="form-control" placeholder="Celular" minlength="9" maxlength="9">
        </div>
    </div>
    <label for="tittle" class="form-label">Direccion</label>
    <div class="mb-3 p-2 mt-0.5">
        <input type="text" name="direccionP" class="form-control" placeholder="Direccion Reniec" required>
    </div>
    <div class="col">
        <label for="inputState" class="form-label">Especialidad</label>
        <select id="inputState" name="especialidad" class="form-select p-1 mt-0.5">
            <option>Nefrologia</option>
            <option>Nutricion</option>
            <option>Psicologia</option>
            <option>Trabajo Social</option>
        </select>
    </div>

    <div class="p-1 mt-4">
        <button type="submit" class="btn btn-primary ">Guardar</button>
    </div>
</div>