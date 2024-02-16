<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { //Verificación de si el formulario ha sido enviado
    // Apuntamos a la BBDD
    $servidor = "localhost";
    $usuario = "root";
    $pass = "";

    // Conexión a la base de datos
    $conectar = mysqli_connect($servidor, $usuario, $pass) or die("Error de conexión");
    mysqli_select_db($conectar, "proyecto");
    // Consulta para insertar las transacciones en la base de datos
    $sql = "BEGIN;
    -- Aquí van las operaciones que deseas realizar dentro de la transacción
    INSERT INTO usuarios (Nombre, Contraseña) VALUES ('Anonymous', 'Anonymous');
    -- Si todo se ejecutó correctamente, confirmas la transacción
    COMMIT;
    BEGIN;
    DELETE FROM usuarios WHERE nombre = 'Javi' AND contraseña = '1234';
    -- Si algo sale mal, deshacer la transacción
    ROLLBACK;";
    mysqli_query($conectar, $sql);
    exit();
}
