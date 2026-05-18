<?php
session_start();
// Validación de seguridad para el Administrador
if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: ../login.html"); 
    exit(); 
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Conductor</title>
    <style type="text/css">
        #canvas-firma {
            border: 2px dashed #000;
            background-color: #fff;
            cursor: crosshair;
            margin-top: 5px;
        }
        button[type="button"] {
            margin-top: 5px;
            padding: 3px 8px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <label>Conductores</label>
    <br>

    <form method="post" action="IConductores.php" enctype="multipart/form-data" id="formConductor">
        <label> Numero_licencia</label>
        <input type="number" id="Numero_licencia" name="Numero_licencia" required>
        <br>

        <label> Nombre</label>
        <input type="text" id="Nombre" name="Nombre" required>
        <br>

        <label> Apellido_paterno</label>
        <input type="text" id="Apellido_paterno" name="Apellido_paterno" required>
        <br>

        <label> Apellido_materno</label>
        <input type="text" id="Apellido_materno" name="Apellido_materno" required>
        <br>

        <label> Estado_procedencia</label>
        <select name="Estado_procedencia" id="Estado_procedencia" required>
            <option value="">Seleccione uno...</option>
            <option value="Aguascalientes">Aguascalientes</option>
            <option value="Baja California">Baja California</option>
            <option value="Baja California Sur">Baja California Sur</option>
            <option value="Campeche">Campeche</option>
            <option value="Chiapas">Chiapas</option>
            <option value="Chihuahua">Chihuahua</option>
            <option value="CDMX">Ciudad de México</option>
            <option value="Coahuila">Coahuila</option>
            <option value="Colima">Colima</option>
            <option value="Durango">Durango</option>
            <option value="Estado de México">Estado de México</option>
            <option value="Guanajuato">Guanajuato</option>
            <option value="Guerrero">Guerrero</option>
            <option value="Hidalgo">Hidalgo</option>
            <option value="Jalisco">Jalisco</option>
            <option value="Michoacán">Michoacán</option>
            <option value="Morelos">Morelos</option>
            <option value="Nayarit">Nayarit</option>
            <option value="Nuevo León">Nuevo León</option>
            <option value="Oaxaca">Oaxaca</option>
            <option value="Puebla">Puebla</option>
            <option value="Querétaro">Querétaro</option>
            <option value="Quintana Roo">Quintana Roo</option>
            <option value="San Luis Potosí">San Luis Potosí</option>
            <option value="Sinaloa">Sinaloa</option>
            <option value="Sonora">Sonora</option>
            <option value="Tabasco">Tabasco</option>
            <option value="Tamaulipas">Tamaulipas</option>
            <option value="Tlaxcala">Tlaxcala</option>
            <option value="Veracruz">Veracruz</option>
            <option value="Yucatán">Yucatán</option>
            <option value="Zacatecas">Zacatecas</option>
        </select>
        <br>

        <label> Fecha_nacimiento</label>
        <input type="date" id="Fecha_nacimiento" name="Fecha_nacimiento" required>
        <br>

        <label> Grupo_sanguineo</label>
        <input type="radio" name="Grupo_sanguineo" value="A+" required> A+
        <input type="radio" name="Grupo_sanguineo" value="A-" required> A-
        <input type="radio" name="Grupo_sanguineo" value="B+" required> B+
        <input type="radio" name="Grupo_sanguineo" value="B-" required> B-
        <input type="radio" name="Grupo_sanguineo" value="AB+" required> AB+
        <input type="radio" name="Grupo_sanguineo" value="AB-" required> AB-
        <input type="radio" name="Grupo_sanguineo" value="O+" required> O+
        <input type="radio" name="Grupo_sanguineo" value="O-" required> O-
        <br>

        <label> Donador_organos</label>
        <select name="Donador_organos" id="Donador_organos" required>
            <option value="">Seleccione uno...</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
        <br>

        <label> Sexo</label>
        <input type="radio" name="Sexo" value="1" required> Masculino
        <input type="radio" name="Sexo" value="0" required> Femenino
        <br>

        <label> Id_domicilio</label>
        <input type="number" id="Id_domicilio" name="Id_domicilio" required>
        <br><br>

        <label><strong>Fotografía del Conductor:</strong></label><br>
        <input type="file" name="foto" accept="image/*" required>
        <br><br>

        <label><strong>Firma Digital:</strong></label><br>
        <canvas id="canvas-firma" width="400" height="150"></canvas><br>
        <button type="button" id="btnLimpiar">Limpiar Firma</button>
        <input type="hidden" name="firma_base64" id="firma_base64">
        <br><br>
    
        <input type="submit" value="Enviar Registro">
    </form>

    <script>
        const canvas = document.getElementById('canvas-firma');
        const ctx = canvas.getContext('2d');
        let dibujando = false;

        ctx.strokeStyle = '#000000'; 
        ctx.lineWidth = 3;   

        function iniciarDibujo(e) {
            dibujando = true;
            dibujar(e);
        }

        function terminarDibujo() {
            dibujando = false;
            ctx.beginPath();
        }

        function dibujar(e) {
            if (!dibujando) return;
            e.preventDefault();
            const rect = canvas.getBoundingClientRect();
            const x = (e.clientX || e.touches[0].clientX) - rect.left;
            const y = (e.clientY || e.touches[0].clientY) - rect.top;

            ctx.lineTo(x, y);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(x, y);
        }

        canvas.addEventListener('mousedown', iniciarDibujo);
        canvas.addEventListener('mouseup', terminarDibujo);
        canvas.addEventListener('mousemove', dibujar);

        canvas.addEventListener('touchstart', iniciarDibujo);
        canvas.addEventListener('touchend', terminarDibujo);
        canvas.addEventListener('touchmove', dibujar);

        document.getElementById('btnLimpiar').addEventListener('click', () => {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        });

        document.getElementById('formConductor').addEventListener('submit', () => {
            const datosFirma = canvas.toDataURL('image/png');
            document.getElementById('firma_base64').value = datosFirma;
        });
    </script>
</body>
</html>
