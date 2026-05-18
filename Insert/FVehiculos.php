<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
?>
<html>

    <label>Vehiculos</label>
    <br>
    <form method="post" action="IVehiculos.php" >
        <label> Id</label>
        <input type="number" id= "Id" name="Id" required>
        <br>

        <label> Anio</label>
        <input type="number" id= "Año" name="Año" required>
        <br>
        
        <label> Placa </label>
        <input type="text" id= "Placa" name="Placa" required>
        <br>
        
        <label> Marca</label>
        <input type="text" id= "Marca" name="Marca" required>
        <br>

        <label> Numero_serie</label>
        <input type="text" id= "Numero_serie" name="Numero_serie" required>
        <br>

        <label> Origen</label>
        <input type="text" id= "Origen" name="Origen" required>
        <br>

        <label> Color</label>
        <input type="text" id= "Color" name="Color" required>
        <br>

        <label> Cilindraje</label>
        <input type="number" id= "Cilindraje" name="Cilindraje" required>
        <br>

        <label> Capacidad</label>
        <input type="number" id= "Capacidad" name="Capacidad" required>
        <br>

        <label> Puertas</label>
        <select id="Puertas" name="Puertas" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <br>
        
        <label> Asientos</label>
        <input type="number" id= "Asientos" name="Asientos" required>
        <br>

        <label> Transmision</label>
        <input type="text" id= "Transmision" name="Transmision" required>
        <br>

        <label> Clave_vehicular</label>
        <input type="text" id= "Clave_vehicular" name="Clave_vehicular" maxlength="7" required>
        <br>

        <label> Tipo_combustible</label>
        <select id="Tipo_combustible" name="Tipo_combustible" required>
            <option value="Gasolina">Gasolina</option>
            <option value="Diesel">Diesel</option>
            <option value="Electrico">Electrico</option>
            <option value="Hibrido">Hibrido</option>
            <option value="No especificado">Otro</option>
        </select>
        <br>

        <input type="submit">
    </form>

</html>