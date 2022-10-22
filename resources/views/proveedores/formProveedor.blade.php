<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>


<div>

    <div class="text-center">
    <h2 class="bg-dark p-2 ml-0 text-white bg-opacity-10 rounded-pill">REGISTRO DE PROVEEDOR</h2>
    </div>

    <div class="row ">
        
        <div class="col p-3 mt-1">
            <input type="text" name="nameProv" class="form-control rounded-pill  border-info" placeholder="Razon social de la empresa: EJEMPLO SAC" required>
        </div>
        
        <div class="col p-3 mt-1">
            <input type="text" name="rucProv" class="form-control rounded-pill  border-info" placeholder="N° RUC">
        </div>
    </div>

    <div class="text-center">
    <h2 class="bg-dark p-2 text-white bg-opacity-10 rounded-pill">DATOS ADICIONALES</h2>
    </div>   

    <div class="row">
        <div class="col p-3 mt-1">
            <input type="text" name="direccionProv" class="form-control rounded-pill  border-info" placeholder="Dirección" required>
        </div>
        <div class="col p-3 mt-1">
            <input type="text" name="correoProv" class="form-control rounded-pill  border-info" placeholder="Correo electrónico: ejemplo@mail.com" required>
        </div>
        <div class="col p-3 mt-1">
            <input type="text" name="telefonoProv" class="form-control rounded-pill  border-info" placeholder="Teléfono:(ej)99999999" minlength="9" maxlength="9">
        </div>
    </div>

    <div class="text-center">
    <h2 class="bg-secondary p-2 text-white bg-opacity-10 rounded-pill">CATEGORIA</h2>
    </div>

    <div class="col p-1 mt-1 mb-2">
        <select id="inputState" name="categoriaProv" class="form-select p-1 mt-0.5 text-center rounded-pill border-info">
            <option>GENERAL</option>
            <option>ALMACEN</option>
            <option>VENTAS</option>
            <option>FACTURACION</option>
            <option>TRANSPORTES</option>
        </select>
    </div>
    <div class="text-center">
    <h2 class="bg-secondary p-2 text-white bg-opacity-10 rounded-pill">OBSERVACIONES</h2>
    </div>
    <div class="row ">
        <div class="col p-3 mt-1">
            <input type="text" name="detalleProv" class="form-control rounded-pill  border-info" placeholder="Detalle">
        </div>

    </div>
    <div class="text-center p-1 mt-3">
        <button type="submit" class="btn btn-primary " onclick="return confirm('¿Confirmar guardado de proveedor?')">Guardar</button>
        <button type="submit" class="btn btn-success" onclick="limpiar()">Limpiar</button>

    </div>

</div>

<script type="text/javascript">
    function limpiar() {
        window.location.href = "/proveedores/create";
    }
</script>