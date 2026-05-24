<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();

validarExistenciaID($Con, 'conductores','Numero_licencia', $_GET['Id'], 'Conductores');

    $Numero_licencia = $_GET['Id'];
    $sql = "SELECT * FROM conductores WHERE Numero_licencia='$Numero_licencia';";
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actualizar Conductor</title>
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
        .vista-previa {
            font-size: 14px;
            color: #475467;
            margin-bottom: 8px;
            display: block;
        }
        .vista-previa img {
            display: block;
            margin-top: 6px;
            border-radius: 8px;
            border: 1px solid #d0d5dd;
        }
        small {
            color: #667085;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <form method="post" action="UConductores.php" enctype="multipart/form-data" id="formConductor" class="insert-form">
        <h2>Actualizar Conductor</h2>

        <input type="hidden" name="Licencia_Original" value="<?php echo $Fila[0]; ?>">

        <label>Numero Licencia</label>
        <input class="input" type="number" id="Numero_licencia" name="Numero_licencia" value="<?php echo $Fila[0]; ?>" required>

        <label>Nombre</label>
        <input class="input" type="text" id="Nombre" name="Nombre" value="<?php echo $Fila[1]; ?>" required>

        <label>Apellido Paterno</label>
        <input class="input" type="text" id="Apellido_paterno" name="Apellido_paterno" value="<?php echo $Fila[2]; ?>" required>

        <label>Apellido Materno</label>
        <input class="input" type="text" id="Apellido_materno" name="Apellido_materno" value="<?php echo $Fila[3]; ?>" required>

        <label>Estado Procedencia</label>
        <input class="input" type="text" id="Estado_procedencia" name="Estado_procedencia" value="<?php echo $Fila[5]; ?>" required>

        <label>Fecha Nacimiento</label>
        <input class="input" type="text" id="Fecha_nacimiento" name="Fecha_nacimiento" value="<?php echo $Fila[4]; ?>" required>

        <label>Grupo Sanguineo</label>
        <input class="input" type="text" id="Grupo_sanguineo" name="Grupo_sanguineo" value="<?php echo $Fila[6]; ?>" required>

        <label>Donador Organos</label>
        <input class="input" type="text" id="Donador_organos" name="Donador_organos" value="<?php echo $Fila[7]; ?>" required>

        <label>Sexo</label>
        <input class="input" type="text" id="Sexo" name="Sexo" value="<?php echo $Fila[8]; ?>" required>

        <label>Id Domicilio</label>
        <input class="input" type="number" id="Id_domicilio" name="Id_domicilio" value="<?php echo $Fila[9]; ?>" required>

        <label>Fotografia del Conductor</label>
        <span class="vista-previa">Foto actual:
            <img src="../Public/<?php echo $Fila[10]; ?>" width="120" onerror="this.src='../Public/uploads/defecto.jpg'" alt="Vista previa foto">
        </span>
        <input class="input" type="file" name="foto" accept="image/*">
        <small>(Selecciona un archivo solo si deseas cambiar la foto actual)</small>

        <label>Firma Digital</label>
        <span class="vista-previa">Firma actual:
            <img src="../Public/<?php echo $Fila[11]; ?>" width="150" onerror="this.src='../Public/uploads/sin_firma.jpg'" alt="Vista previa firma">
        </span>
        <canvas id="canvas-firma" width="400" height="150"></canvas>
        <button type="button" id="btnLimpiar" class="btn btn-primary" style="width:fit-content; margin-top: 4px;">Limpiar Lienzo</button>
        <input type="hidden" name="firma_base64" id="firma_base64">
        <small>(Dibuja aquí solo si deseas cambiar la firma actual)</small>

        <div class="form-footer">
            <input type="submit" class="btn btn-primary" value="Actualizar">
        </div>
    </form>

    <script>
        const canvas = document.getElementById('canvas-firma');
        const ctx = canvas.getContext('2d');
        let dibujando = false;
        let seHizoTrazo = false;

        ctx.strokeStyle = '#000000';
        ctx.lineWidth = 3;

        function iniciarDibujo(e) {
            dibujando = true;
            seHizoTrazo = true;
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
            const x = (e.clientX || e.touches.clientX) - rect.left;
            const y = (e.clientY || e.touches.clientY) - rect.top;

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
            seHizoTrazo = false;
            document.getElementById('firma_base64').value = "";
        });

        document.getElementById('formConductor').addEventListener('submit', () => {
            if (seHizoTrazo) {
                const datosFirma = canvas.toDataURL('image/png');
                document.getElementById('firma_base64').value = datosFirma;
            }
        });
    </script>
</body>
</html>