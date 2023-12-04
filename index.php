<?php 
    include_once('global.php');
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Programación en PHP</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/main.css">
        <link rel="stylesheet" href="styles/forms.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    <body class="grid-container">
        <header class="header">
            <?php
                include VIEWS_PATH . '/header.php'; 
            ?>
        </header>
        <nav class="navbar"></nav>
        <main class="main">
            <?php
                if (!isset($_SESSION['email']))
                {
                    include VIEWS_PATH . '/register.php';
                }
                else
                {
                    include VIEWS_PATH . '/layout.php';
                }
            ?>
        </main>
        <aside class="sidebar"></aside>
        <footer class="footer">
            <?php
                include VIEWS_PATH . '/footer.php';
            ?>
        </footer>
    </body>
</html>