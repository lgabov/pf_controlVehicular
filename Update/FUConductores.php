<?php
require_once "../Auth/auth.php";

proteger(["admin"]);
include ('../Controlador.php');
$Con = Conectar();
validarExistenciaID($Con, 'conductores', $_GET['Id'], 'Conductores');
    $Numero_licencia = $_GET['Numero_licencia'];
    $sql = "SELECT * FROM conductores WHERE Numero_licencia='$Numero_licencia';";
    $Con = Conectar();
    $ResultSet = Ejecutar($Con, $sql);
    $Fila = mysqli_fetch_row($ResultSet);

    Desconectar($Con);
?>
<html>
<head>
    <title>Actualizar Conductor</title>
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
        .vista-previa {
            margin: 10px 0;
            display: block;
        }
    </style>
</head>
<body>
    <label>Actualizar Conductores</label>
    <br>

    <form method="post" action="UConductores.php" enctype="multipart/form-data" id="formConductor">

        <input type="hidden" name="Licencia_Original" value="<?php echo $Fila[0]; ?>">

        <label> Numero_licencia</label>
        <input type="number" id="Numero_licencia" name="Numero_licencia" value="<?php echo $Fila[0]; ?>" required>
        <br>

        <label> Nombre</label>
        <input type="text" id="Nombre" name="Nombre" value="<?php echo $Fila[1]; ?>" required>
        <br>

        <label> Apellido_paterno</label>
        <input type="text" id="Apellido_paterno" name="Apellido_paterno" value="<?php echo $Fila[2]; ?>" required>
        <br>

        <label> Apellido_materno</label>
        <input type="text" id="Apellido_materno" name="Apellido_materno" value="<?php echo $Fila[3]; ?>" required>
        <br>

        <label> Estado_procedencia</label>
        <input type="text" id="Estado_procedencia" name="Estado_procedencia" value="<?php echo $Fila[4]; ?>" required>
        <br>

        <label> Fecha_nacimiento</label>
        <input type="text" id="Fecha_nacimiento" name="Fecha_nacimiento" value="<?php echo $Fila[5]; ?>" required>
        <br>

        <label> Grupo_sanguineo</label>
        <input type="text" id="Grupo_sanguineo" name="Grupo_sanguineo" value="<?php echo $Fila[6]; ?>" required>
        <br>

        <label> Donador_organos</label>
        <input type="text" id="Donador_organos" name="Donador_organos" value="<?php echo $Fila[7]; ?>" required>
        <br>

        <label> Sexo</label>
        <input type="text" id="Sexo" name="Sexo" value="<?php echo $Fila[8]; ?>" required>
        <br>

        <label> Id_domicilio</label>
        <input type="number" id="Id_domicilio" name="Id_domicilio" value="<?php echo $Fila[9]; ?>" required>
        <br><br>

        <label><strong>Fotografía del Conductor:</strong></label><br>
        <span class="vista-previa">Foto actual: <br>
            <img src="../Public/<?php echo $Fila[10]; ?>" width="120" onerror="this.src='../Public/uploads/defecto.jpg'" alt="Vista previa foto">
        </span>
        <input type="file" name="foto" accept="image/*">
        <br>
        <small style="color: #666;">(Selecciona un archivo solo si deseas cambiar la foto actual)</small>
        <br><br>

        <label><strong>Firma Digital:</strong></label><br>
        <span class="vista-previa">Firma actual: <br>
            <img src="../Public/<?php echo $Fila[11]; ?>" width="150" style="border:1px solid #ccc;" onerror="this.src='../Public/uploads/sin_firma.jpg'" alt="Vista previa firma">
        </span>
        <canvas id="canvas-firma" width="400" height="150"></canvas><br>
        <button type="button" id="btnLimpiar">Limpiar Lienzo</button>
        <input type="hidden" name="firma_base64" id="firma_base64">
        <br>
        <small style="color: #666;">(Dibuja aquí solo si deseas cambiar la firma actual)</small>
        <br><br>
    
        <input type="submit" value="Actualizar Registro">
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

