<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Iniciar - CenterMedicine</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/x-svg" href="img/icono.svg">
    <style>
        .error {
            color: red;
            font-size: 0.9em;
            font-weight: bolder;
        }
    </style>
</head>
<body>
    <form class="login" id="loginForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" name="login">
        <h2>CenterMedicine</h2>
        <img src="img/icono.svg" alt="Icono">
        
        <input type="text" id="usuario" name="usuario" placeholder="Usuario" class="bordes" autofocus>
        <span class="error" id="usuarioError"></span>
        <br><br>
        
        <input type="password" id="password" name="password" placeholder="Contraseña" class="bordes">
        <span class="error" id="passwordError"></span>
        <br><br>
        
        <input type="submit" value="Ingresar">
        
        <?php if (!empty($errores)): ?>
          <ul>
              <?php echo $errores; ?>
          </ul>
        <?php endif; ?>
    </form>

    <script src="script.js"></script>
</body>
</html>
