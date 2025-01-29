<?php
    session_start();
    
    if(!isset($_SESSION['usuario'])){
        echo '
            <script>
                alert("Por favor debes iniciar sesión");
                window.location = "index.php";
            </script>
        ';
        header("location: index.php");
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/imagenes/havcanalogo.png">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <title>HAVCANA</title>
</head>
<body>
    <h1>Si valeeeeee</h1>
    <a href="php/cerrar_sesion.php">Cerrar Sesión</a>
</body>
</html>