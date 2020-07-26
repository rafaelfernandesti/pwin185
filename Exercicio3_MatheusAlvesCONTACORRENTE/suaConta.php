<?php
require_once "ContaCorrente.php";

if($_POST['saldoInicial'] < 200){
    header('Location: criacaodeConta.php');
}else{

    session_start();

    $_SESSION['ContaCorrente'] = new ContaCorrente($_POST['Nome'],$_POST['saldoInicial'], time("dia/mes/ano"));

    header('Location: menu.php');
}
?>
