<?php
    if (!isset($_SESSION['loggedIn'])) 
    {
        include VIEWS_PATH . '/login.php';
    }
    else
    {
        include VIEWS_PATH . '/session.php';
    }
?>
