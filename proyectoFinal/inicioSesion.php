<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio de sesión</title>
  <!--Estilos de la página-->
  <link rel="stylesheet" type="text/css" href="inicioSesionCSS.css" />
</head>

<body>
  <a href="registroLetter.php" class="inicio">Inicio</a><span class="simboloMayor"> > </span>
  <span class="Bienvenida">Bienvenida</span>
  <div class="vertical">
    <p id="textoInicioSesion">Inicio de sesión</p>

    <img src="avatar.png" alt="avatar" class="avatar" />

    <?php
    // Verificar si se ha enviado el formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Obtención el nombre de usuario y contraseña del formulario
      $nombre = $_POST["usuario"];
      $user_password = $_POST["password"];

      // Verificar si los campos no están vacíos
      if (!empty($nombre) && !empty($user_password)) {
        // Establecer conexión con la base de datos
        $servidor = "localhost";
        $usuario = "root";
        $pass = "";
        $nombreBD = "proyecto";

        $conectar = mysqli_connect($servidor, $usuario, $pass, $nombreBD) or die("Error de conexión");

        // Prevenir inyección SQL escapando los datos
        $nombre = mysqli_real_escape_string($conectar, $nombre);
        $user_password = mysqli_real_escape_string($conectar, $user_password);

        // Insertar datos en la base de datos
        $sql = "SELECT * FROM usuarios WHERE nombre = '$nombre' AND contraseña  = '$user_password'";

        $query = mysqli_query($conectar, $sql);
        if (mysqli_num_rows($query) > 0) {

          $_SESSION["usuario"] = $nombre;

          // Redirección a paginaInicio.php después del inicio de sesión
          header("Location: paginaInicio.php");
          exit();
        }

        // Cierre de conexión
        mysqli_close($conectar);
      }
    }
    ?>
    <!--Formulario de registro con método POST-->
    <form action="" method="post">
      <input type="text" placeholder="Nombre de usuario / Email" id="usuario" name="usuario" required /><br /><br />
      <input type="password" placeholder="Contraseña" id="password" name="password" required /><br /><br />
      <input type="submit" value="Iniciar sesión" id="inicioSesion" />
    </form>



    <img src="cartelLetter.png" alt="cartel" class="cartel" />
  </div>
</body>

</html>

</html>