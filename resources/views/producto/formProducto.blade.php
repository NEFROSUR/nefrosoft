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
            <select id="inputState" name="um" class="form-select p-1 mt-0.5">
                <option>unidad</option>
                <option>galon</option>
                <option>caja</option>
                <option>blister</option>

            </select>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <label for="inputState" class="form-label">
                <Table>Categoria</Table>
            </label>
            <select id="inputState" name="categoria_id" class="form-select p-1 mt-0.5">
                <option value="1">Medicamentos</option>
                <option value="2">Desechables médicos</option>
                <option value="3">Limpieza</option>
                <option value="4">Oficina</option>
                <option value="5">Farmacia</option>
                <option value="6">Soluciones</option>
                <option value="7">Insumos de MH</option>
            </select>
        </div>
    </div>

    <div class="text-center p-1 mt-4">
        <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Confirmar guardado de producto?')">Guardar</button>
    </div>
</div>