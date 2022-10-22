<div>
    
    <div class="text-center">
        <h2 class="bg-dark p-2 ml-0 text-white bg-opacity-10 rounded-pill">DATOS DEL PRODUCTO</h2>
    </div>



    <div class="row p-2">
        <div class="col mt-0.5">
            <input type="text" name="nombreProd" class="p-3 form-control rounded-pill  border-info" placeholder="Nombre" required>
        </div>

        <div class="col mt-0.5">
            <input type="text" name="marcaProd" class="form-control rounded-pill  border-info" placeholder="Marca" required>
        </div>
    </div>

    <div class="row p-2">

        
        <div class="col">
            <div class="text-center">
                <h2 class="bg-secondary p-2 ml-0 text-white bg-opacity-10 rounded-pill">UNIDAD DE MEDIDA (UM)</h2>
            </div>
            <select id="inputState" name="umedida" class="col text-center form-select p-1 mt-0.5 rounded-pill  border-info">
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

        <div class="col text-center">
            <h2 class="bg-secondary p-2 ml-0 text-white bg-opacity-10 rounded-pill">CATEGORIA</h2>

            <select id="inputState" name="categoria_id" class="col form-select p-1 mt-0.5 text-center rounded-pill  border-info">
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

    <div class="row">
        
    </div>

    <div class="text-center p-1 mt-4">
        <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Confirmar guardado de producto?')">Guardar</button>
    </div>
</div>