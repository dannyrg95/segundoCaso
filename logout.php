<?php
    include_once('global.php');

    session_start();

    # Limpia todas las variables de sesión
    session_unset();

    # Destruye la sesión
    session_destroy();

    header('Location: ' . ROOT . '/index.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Programación en PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/main.css">
    </head>
    <body>
        Closing session...
    <body>
</html>