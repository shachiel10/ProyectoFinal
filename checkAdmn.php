<?php
session_start();

if (!empty($_POST['check'])) {
    if (!empty($_POST['captcha'])) {
        // Convertir la entrada del usuario y el código captcha almacenado a mayúsculas
        $userInput = strtoupper($_POST["captcha"]);
        $storedCaptcha = strtoupper($_SESSION["captcha"]);

        if ($userInput === $storedCaptcha) {
            // Redirigir a index.html
            header("Location: loginAdmin");
            exit(); // Asegúrate de salir después de la redirección
        } else {
            ?><h3 class="error">ERROR: Incorrect captcha code.</h3><?php
        }
    } else {
        ?><h3 class="error">ERROR: Complete captcha code.</h3><?php
    }
}
?>
