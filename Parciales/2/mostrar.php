<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mostrar Datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f9f9f9;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .grid div {
            padding: 15px;
            color: white;
            font-size: 14px;
        }

        .bg1 { background-color: #c0392b; }
        .bg2 { background-color: #27ae60; }
        .bg3 { background-color: #2980b9; }
        .bg4 { background-color: #e67e22; }
        .bg5 { background-color: #8e44ad; }
        .bg6 { background-color: #1abc9c; }
    </style>
</head>
<body>
    <h2>Datos Ingresados:</h2>
    <div class="grid">
        <div class="bg1">Nombres: <?php echo $_POST['nombres']; ?></div>
        <div class="bg2">Apellidos: <?php echo $_POST['apellidos']; ?></div>
        <div class="bg3">Sexo: <?php echo $_POST['sexo']; ?></div>
        <div class="bg4">Dirección: <?php echo $_POST['direccion']; ?></div>
        <div class="bg5">Celular: <?php echo $_POST['celular']; ?></div>
        <div class="bg6">Correo: <?php echo $_POST['correo']; ?></div>
    </div>
</body>
</html>
