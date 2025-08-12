<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <title>Document</title>
</head>
<body>
    <?php
    //base de datos
    $servername="localhost";
    $database="tad_10_datos";
    $username="neikyk";
    $password="123";
    //recuperacion de variables del html
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $usuario = $_POST['usuario'];
    //conexion a la base de datos
    $conexion =mysqli_connect($servername,$username,$password,$database);
    //ingresando valores en la tabla
    $sql= "INSERT INTO datos (nombre ,email,contraseña,usuario) VALUES ('$nombre','$email','$contraseña','$usuario')";
    if(mysqli_query($conexion,$sql)){
        echo "Datos ingresados correctamente";
    }
    ?>
    <button><a href="index.html">regresar al inicio</a></button>
</body>
</html>