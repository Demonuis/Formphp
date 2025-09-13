<?php
$nombre = $_POST['nombre'] ?? '';
$edad = $_POST['edad'] ?? '';
$direccion = $_POST['direccion'] ?? '';
$salario = $_POST['salario'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Información del Empleado</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="form-container">
    <h2>Información Recibida</h2>
    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></p>
    <p><strong>Edad:</strong> <?php echo htmlspecialchars($edad); ?> años</p>
    <p><strong>Dirección:</strong> <?php echo htmlspecialchars($direccion); ?></p>
    <p><strong>Salario:</strong> <?php echo htmlspecialchars($salario); ?></p>
    <a href="formphp.html" class="back-btn">Volver</a>
  </div>
</body>
</html>
