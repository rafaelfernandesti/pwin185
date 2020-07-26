<?php
    require_once "ContaCorrente.php";

    session_start();

    $_SESSION['ContaCorrente']->transferir($_GET['trans']);

    echo "<form action='menu.php'>
        </form>";
?>