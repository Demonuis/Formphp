<?php
// Recibimos los datos
$nombre = $_POST['nombre'] ?? null;
$edad = $_POST['edad'] ?? null;
$cargo = $_POST['cargo'] ?? null;
$correo = $_POST['correo'] ?? ($_POST['correo_login'] ?? null);
$salario = $_POST['salario'] ?? null;

// Detectamos si es inicio de sesión o registro
$accion = isset($_POST['correo_login']) ? "login" : "registro";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resultado</title>
  <link rel="stylesheet" href="styles.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: linear-gradient(135deg, #001f33, #000000);
      font-family: Arial, sans-serif;
    }
    .message {
      background: rgba(0, 0, 0, 0.8);
      color: cyan;
      padding: 30px 40px;
      border-radius: 20px;
      box-shadow: 0 0 20px cyan, 0 0 40px cyan inset;
      text-align: center;
      font-size: 1.3em;
      animation: pop 0.5s ease-in-out, fadeOut 4s ease-in-out forwards 3s;
    }
    @keyframes pop {
      0% { transform: scale(0.5); opacity: 0; }
      100% { transform: scale(1); opacity: 1; }
    }
    @keyframes fadeOut {
      0% { opacity: 1; }
      100% { opacity: 0; transform: translateY(-50px); }
    }
  </style>
</head>
<body>
  <div class="message">
    <?php if ($accion === "login"): ?>
      <h2>¡Sesión iniciada correctamente!</h2>
      <p>Bienvenido <strong><?php echo $correo; ?></strong></p>
    <?php else: ?>
      <h2>¡Registro exitoso!</h2>
      <p>El empleado <strong><?php echo $nombre; ?></strong> tiene <?php echo $edad; ?> años, 
      trabaja como <strong><?php echo $cargo; ?></strong>, vive en el correo <strong><?php echo $correo; ?></strong> 
      y su salario es <strong>$<?php echo $salario; ?></strong>.</p>
    <?php endif; ?>
  </div>
</body>
</html>
