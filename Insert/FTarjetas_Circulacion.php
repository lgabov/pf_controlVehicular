<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<html>
    <label>Tarjetas_Circulacion</label>
    <br>
    <form method="get" action="ITarjetas_Circulacion.php">
        <label> Folio</label>
        <input type="number" id= "Folio" name="Folio" required>
        <br>

        <label> Vigencia</label>
        <input type="date" id= "Vigencia" name="Vigencia" required>
        <br>
        
        <label> Oficina</label>
        <select id="Oficina" name="Oficina" required>
            <option value="Oficina1">Oficina 1</option>
            <option value="Oficina2">Oficina 2</option>
            <option value="Oficina3">Oficina 3</option>
        </select>
        <br>

        <label> Operacion</label>
        <input type="text" id= "Operacion" name="Operacion" required>
        <br>

        <label> Movimiento</label>
        <select name="Movimiento" id="Movimiento" required>
            <option value="alta">Alta de vehiculo</option>
            <option value="baja">Baja de vehiculo</option>
            <option value="cambio_propietario">Cambio de propietario</option>
            <option value="reposicion">Reposicion por robo o extravio</option>
            <option value="renovacion">Renovacion de tarjeta de circulacion</option>
            <option value="cambio_domicilio">Cambio de domicilio</option>
             <option value="correccion_datos">Correccion de datos</option>
            <option value="revalidacion">Revalidacion</option>
             <option value="emplacamiento">Emplacamiento</option>
            <option value="canje_placas">Canje de placas</option>
        </select>        
        <br>

        <label> Id_vehiculo</label>
        <input type="number" id= "Id_vehiculo" name="Id_vehiculo" required>
        <br>
        
        <label> Id_propietario</label>
        <input type="number" id= "Id_propietario" name="Id_propietario" required>
        <br>

        <label> Id_pago</label>
        <input type="number" id= "Id_pago" name="Id_pago" required>
        <br>
        
        <input type="submit">
    </form>

</html>