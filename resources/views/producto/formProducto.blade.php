<div>
    <div>
        <label for="tittle" class="form-label">REGISTRO NUEVO PRODUCTO</label>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <input type="text" name="nombreProd" class="form-control" placeholder="Nombre del producto" required>
        </div>
    </div>

    <div class="row">

        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Marca</label>
            <input type="text" name="marcaProd" class="form-control">
        </div>
        <div class="col">
            <label for="inputState" class="form-label">
                <Table>U.M</Table>
            </label>
            <select id="inputState" name="umedida" class="form-select p-1 mt-0.5">
                <option>Unidad</option>
                <option>Bolsa</option>
                <option>Caja</option>
                <option>Galon</option>
                <option>Metros</option>
                <option>Paquete</option>
                <option>Pares</option>
                <option>Resma</option>
            </select>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <label for="inputState" class="form-label">
                <Table>Categoria</Table>
            </label>
            <select id="inputState" name="categoria_id" class="form-select p-1 mt-0.5">
                <option value="1">INSTRUMENTO</option>
                <option value="2">MATERIAL DE LIMPIEZA</option>
                <option value="3">MEDICAMENTO</option>
                <option value="4">SERVICIO</option>
                <option value="5">UTILES DE ESCRITORIO</option>
                <option value="6">OTROS</option>
                <option value="7">SIN CATEGORIA</option>
            </select>
        </div>
    </div>

    <div class="text-center p-1 mt-4">
        <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Confirmar guardado de producto?')">Guardar</button>
    </div>
</div>