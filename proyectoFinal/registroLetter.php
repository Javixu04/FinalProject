<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <!--Estilos de la página-->
    <link rel="stylesheet" type="text/css" href="registroCSS.css" />
</head>

<body>
    <a class="inicio">Inicio</a> <span class="simboloMayor"> > </span><span class="Bienvenida">Bienvenida</span>
    <div class="contenido">
        <div class="vertical">
            <p id="textoRegistro">Registro</p>
            <img src="avatar.png" alt="avatar" class="avatar">
            <!--Formulario de registro con método POST-->
            <form action="" method="post" id="miformu" name="miformu">
                <input type="text" placeholder="Nombre de usuario / Email" id="usuario" name="usuario" required /><br /><br />
                <input type="password" placeholder="Contraseña" id="password" name="password" required><br><br>
                <input type="password" placeholder="Confirmar contraseña" id="confirmPassword" required><br><br>
                <a href="inicioSesion.php" class="inicio">Iniciar Sesión</a><br><br>
                <input type="submit" value="Regístrate" id="Registro">
            </form> <img src="cartelLetter.png" alt="cartel" class="cartel">

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") { //Verificación de si el formulario ha sido enviado
                // Obtenemos el nombre de usuario y contraseña desde el formulario
                $nombre = $_POST["usuario"];
                $user_password = $_POST["password"];
                $servidor = "localhost";
                $usuario = "root";
                $pass = "";

                // Conexión a la base de datos
                $conectar = mysqli_connect($servidor, $usuario, $pass) or die("Error de conexión");
                mysqli_select_db($conectar, "proyecto");
                // Consulta para insertar el usuario en la base de datos
                $sql = "INSERT INTO usuarios (nombre, contraseña) VALUES ('$nombre', '$user_password');";
                mysqli_query($conectar, $sql);
                // Redirección a inicioSesion.php después del registro
                header("Location: inicioSesion.php");
                exit();
            }
            ?>

        </div>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</body>

</html>