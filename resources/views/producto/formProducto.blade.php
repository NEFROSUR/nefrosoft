<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<div>
    <div>
        <label for="tittle" class="form-label">REGISTRO NUEVO PRODUCTO</label>
    </div>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <input type="text" name="nombreProd" class="form-control" placeholder="Nombre del producto" required>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="codigoProd" class="form-control" placeholder="Código del producto">
        </div>
    </div>
   
    <div class="row">
        
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Marca</label>
            <input type="text" name="marcaProd" class="form-control" placeholder="9" minlength="9" maxlength="9">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Precio unitario</label>
            <input type="text" name="precioUnitarioProd" class="form-control" placeholder="9" minlength="9" maxlength="9">
        </div>
        <div class="col p-2 mt-0.5">
            <label for="tittle" class="form-label">Unidad de medida</label>
            <input type="text" name="unidadMedidaProd" class="form-control" placeholder="9" minlength="9" maxlength="9">
        </div>
        <div class="col">
            <label for="inputState" class="form-label">
                <Table>U.M</Table>
            </label>
            <select id="inputState" name="um" class="form-select p-1 mt-0.5">
                <option value="categoria1">unidad</option>
                <option value="categoria2">galon</option>
                <option value="categoria2">caja</option>
                <option value="categoria2">blister</option>

            </select>
        </div>

    </div>
    <div class="row">
        <div class="col">
            <label for="inputState" class="form-label">
                <Table>Categoria</Table>
            </label>
            <select id="inputState" name="categoria_id" class="form-select p-1 mt-0.5">
                <option value="categoria1">Categoria 1</option>
                <option value="categoria2">Categoria 2</option>
            </select>
        </div>
        <div class="col">
            <label for="inputState" class="form-label">
                <Table>Tipo de moneda</Table>
            </label>
            <select id="inputState" name="tipoMoneda" class="form-select p-1 mt-0.5">
                <option value="categoria1">Soles</option>
                <option value="categoria2">Dolares</option>
            </select>
        </div>
        <div class="col">
            <label for="inputState" class="form-label">
                <Table>Proveedor</Table>
            </label>
            <select id="inputState" name="proveedor_id" class="form-select p-1 mt-0.5">
                <option value="categoria1">proveedor1</option>
                <option value="categoria2">proveedor2</option>
            </select>
        </div>
    </div>
    
    <div class="text-center p-1 mt-4">
        <button type="submit" class="text-center btn btn-primary " onclick="return confirm('¿Confirmar guardado de producto?')">Guardar</button>
    </div>
</div>
<script type="text/javascript">
    $(function() {
        $('#datepicker').datepicker({
            format: 'dd-mm-yyyy'
        });
    });
</script>