<?php
    require_once "ContaCorrente.php";

    session_start();

    $_SESSION['ContaCorrente']->sacar($_GET['saque']);

    echo "<form action='menu.html'>
        </form>";
?>
