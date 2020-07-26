<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <strong>Bem vindo</strong>
    
    <br/>

    <form action="saque.php" method="GET">
        <strong>Saque</strong>
        <input type="number" name="saque" id="saque" placeholder="Digite o valor para saque : ">
        
        <input type="submit" value="Sacar">
    </form>

        <br/>

    <form action="deposito.php" method="get">    
        <strong>Depósito</strong>
        <input type="number" name="dep" id="dep" placeholder="Digite o valor para deposito">
        
        <input type="submit" value="Depositar">
    </form>

        <br/>

    <form action="transferencia.php" method="GET">
        <strong>Transferência</strong>
        <input type="number" name="trans" id="trans" placeholder="Digite o valor para transferencia">
        

        <input type="submit" value="Transferir">

    </form>

    <br/><br/>

    <form action="checarSaldo.php" method="get">
        <input type="submit" value="Checar Saldo">
    </form>

</body>
</html>

