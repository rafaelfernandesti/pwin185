<?php
    require_once "ContaCorrente.php";

    session_start();

    $_SESSION['ContaCorrente']->deposito($_GET['Dep']);

    echo "<form action='menu.php'>
        </form>";
?>