<?php
    require_once "ContaCorrente.php";

    session_start();
    
    $saldo = $_SESSION['ContaCorrente']->getSaldo();
    
    echo "Seu saldo é de : " . $saldo;
?>