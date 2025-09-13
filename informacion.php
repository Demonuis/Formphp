<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Si viene de registro
    if (isset($_POST["registrar"])) {
        $nombre = htmlspecialchars($_POST["nombre"]);
        $edad = htmlspecialchars($_POST["edad"]);
        $direccion = htmlspecialchars($_POST["direccion"]);
        $cargo = htmlspecialchars($_POST["cargo"]);
        $correo = htmlspecialchars($_POST["correo"]);
        $salario = htmlspecialchars($_POST["salario"]);

        $mensaje = "El usuario <strong>$nombre</strong> tiene <strong>$edad años</strong>, vive en <strong>$direccion</strong>, ocupa el cargo de <strong>$cargo</strong>, su correo es <strong>$correo</strong> y su salario es de <strong>$$salario</strong>.";
    }

    // Si viene de inicio de sesión
    if (isset($_POST["iniciar"])) {
        $correoLogin = htmlspecialchars($_POST["correoLogin"]);
        $password = htmlspecialchars($_POST["password"]);

        if ($correoLogin === "admin@correo.com" && $password === "1234") {
            $mensaje = "El usuario <strong>$correoLogin</strong> ha iniciado sesión correctamente.";
        } else {
            $mensaje = "Correo o contraseña incorrectos. <a href='index.php'>Volver</a>";
        }
    }

} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Información</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="info-container">
    <h2>Resultado</h2>
    <p><?= $mensaje ?></p>
    <a href="index.php" class="btn">Volver</a>
  </div>
</body>
</html>
