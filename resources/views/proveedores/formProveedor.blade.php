<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<div>
    <div>
        <label for="tittle" class="form-label">REGISTRO DEL PROVEEDOR</label>
    </div>

    <label for="tittle" class="form-label">Razón social del proveedor</label>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <input type="text" name="nameProv" class="form-control" placeholder="Nombre del Proveedor" required>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="rucProv" class="form-control" placeholder="N° RUC">
        </div>
        
        
    </div>
    <label for="tittle" class="form-label">Datos del proveedor: </label>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <input type="text" name="direccionProv" class="form-control" placeholder="Dirección" required>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="correoProv" class="form-control" placeholder="Correo electrónico" required>
        </div>
        <div class="col p-2 mt-0.5">
            <input type="text" name="telefonoProv" class="form-control" placeholder="Telefono" minlength="9" maxlength="9">
        </div>
       </div>     
    </div>
    <label for="tittle" class="form-label">Categoria: </label>

    <div class="col p-2 mt-0.5">
            <select id="inputState" name="categoriaProv" class="form-select p-1 mt-0.5" >
                <option>Categoria1</option>
                <option>Categoria2</option>
                <option>Categoria3</option>
                <option>Categoria4</option>
            </select>
    </div>
    <label for="tittle" class="form-label">Datos del proveedor: </label>
    <div class="row">
        <div class="col p-2 mt-0.5">
            <input type="text" name="detalleProv" class="form-control" placeholder="Detalle">
        </div>
          
    </div>
    <div class="text-center p-1 mt-4">
        <button type="submit" class="btn btn-primary " onclick="return confirm('¿Confirmar guardado de proveedor?')">Guardar</button>
        <button type="submit" class="btn btn-success" onclick="limpiar()">Limpiar</button>

    </div>
   
</div>

<script type="text/javascript">
function limpiar() {
    window.location.href = "/proveedores/create";
}
</script>