<?php
    include_once('../../global.php');
    include_once MODELS_PATH . '/userModel.php';
    session_start();


    ob_start();
    $response  = '';
    $success;

    if (isset($_POST["delete"])) {
        echo $email;
        $email = $_POST["email"];
        if (!isset($email)) {
            $response = '{"success": false, "errorMessage": "Correo electrónico no encontrado"}';
        }
        if ($email === $_SESSION["email"]) {
            $response = '{"success": false, "errorMessage": "No está permitido borrar la sesión actual"}';
        }

        if (strlen($response) === 0) {
            $success = User::delete($email);
        }


        if ($success === TRUE) {
            $response = '{"success": true}';
        }
    }


    ob_end_clean();
    echo $response;


?>