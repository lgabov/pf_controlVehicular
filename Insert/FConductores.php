<?php
    require_once "../Auth/auth.php";
    proteger(["admin"]);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Insertar Conductor</title>
    <link rel="stylesheet" href="../main.css?v=1">
    <style>
        #canvas-firma {
            border: 2px dashed #d0d5dd;
            background-color: #f9fafb;
            cursor: crosshair;
            margin-top: 4px;
            border-radius: 8px;
            width: 100%;
        }
    </style>
</head>
<body>
    <form method="post" action="IConductores.php" enctype="multipart/form-data" id="formConductor" class="insert-form">
        <h2>Conductores</h2>

        <label>Numero Licencia</label>
        <input class="input" type="number" id="Numero_licencia" name="Numero_licencia" required>

        <label>Nombre</label>
        <input class="input" type="text" id="Nombre" name="Nombre" required>

        <label>Apellido Paterno</label>
        <input class="input" type="text" id="Apellido_paterno" name="Apellido_paterno" required>

        <label>Apellido Materno</label>
        <input class="input" type="text" id="Apellido_materno" name="Apellido_materno" required>

        <label>Estado Procedencia</label>
        <select class="input" name="Estado_procedencia" id="Estado_procedencia" required>
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

        <label>Fecha Nacimiento</label>
        <input class="input" type="date" id="Fecha_nacimiento" name="Fecha_nacimiento" required>

        <label>Grupo Sanguineo</label>
        <div class="radio-group">
            <span><input type="radio" name="Grupo_sanguineo" value="A+" required> A+</span>
            <span><input type="radio" name="Grupo_sanguineo" value="A-"> A-</span>
            <span><input type="radio" name="Grupo_sanguineo" value="B+"> B+</span>
            <span><input type="radio" name="Grupo_sanguineo" value="B-"> B-</span>
            <span><input type="radio" name="Grupo_sanguineo" value="AB+"> AB+</span>
            <span><input type="radio" name="Grupo_sanguineo" value="AB-"> AB-</span>
            <span><input type="radio" name="Grupo_sanguineo" value="O+"> O+</span>
            <span><input type="radio" name="Grupo_sanguineo" value="O-"> O-</span>
        </div>

        <label>Donador Organos</label>
        <select class="input" name="Donador_organos" id="Donador_organos" required>
            <option value="">Seleccione uno...</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>

        <label>Sexo</label>
        <div class="radio-group">
            <span><input type="radio" name="Sexo" value="1" required> Masculino</span>
            <span><input type="radio" name="Sexo" value="0"> Femenino</span>
        </div>

        <label>Id Domicilio</label>
        <input class="input" type="number" id="Id_domicilio" name="Id_domicilio" required>

        <label>Fotografía del Conductor</label>
        <input class="input" type="file" name="foto" accept="image/*" required>

        <label>Firma Digital</label>
        <canvas id="canvas-firma" width="400" height="150"></canvas>
        <button type="button" id="btnLimpiar" class="btn btn-primary" style="width:fit-content; margin-top: 4px;">Limpiar Firma</button>
        <input type="hidden" name="firma_base64" id="firma_base64">

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Insertar">
        </div>
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