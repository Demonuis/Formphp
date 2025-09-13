<?php
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$cargo = $_POST['cargo'];
$salario = $_POST['salario'];
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
    <h2>Información recibida</h2>
    <p>El empleado **<?php echo $nombre; ?>** tiene **<?php echo $edad; ?>** años.</p>
    <p>Su correo electrónico es: **<?php echo $correo; ?>**.</p>
    <p>Actualmente ocupa el cargo de: **<?php echo $cargo; ?>**.</p>
    <p>Vive en **<?php echo $direccion; ?>** y su salario es: **$<?php echo $salario; ?>**.</p>
</body>
</html>
