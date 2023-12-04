<?php
    include_once CONTROLLERS_PATH . '/userController.php';

    if (isset($_POST["errorMessage"]))
    {
        echo '<div class="alert">' . $_POST["errorMessage"] . '</div>';
    }

?>

<form id="loginForm" name="loginForm" method="post">
    <fieldset>
        <input type="email" id="email" name="email" placeholder="Correo Electrónico" required />
        <input type="password" id="password" name="password" placeholder="Contraseña" minlength="6" maxlength="12" required />
        <button type="submit" id="login" name="login">Login</button>
    </fieldset>
</form>

<script type="text/javascript">
    const email = document.getElementById("email");
    email.addEventListener("input", (event) => {
        if (email.validity.typeMismatch) {
            email.setCustomValidity("La dirección de correo electrónico no es válida!");
        } else {
            email.setCustomValidity("");
        }
    });

    const password = document.getElementById("password");
    password.addEventListener("input", (event) => {
        if (password.validity.tooShort || password.validity.tooLong) {
            password.setCustomValidity("La contraseña no es válida!");
        } else {
            password.setCustomValidity("");
        }
    });

    const form = document.getElementById("loginForm");
    form.addEventListener("submit", (event) => {
        if (email.validity.valueMissing)
        {
            email.setCustomValidity("La dirección de correo electrónico es obligatoria!");
        }

        if (password.validity.valueMissing)
        {
            password.setCustomValidity("La contraseña es obligatoria!");
        }

        if (!email.validity.valid || !password.validity.valid) {
           event.preventDefault();
        }
    });
</script>