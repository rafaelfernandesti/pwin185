<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Criação de ocnta</title>
</head>


<body>
        <form action="SuaConta.php" method="post">
        <input type="text" name="Nome" id="Nome" placeholder="Seu nome :">
        <input type="number" name="saldoInicial" id="saldoInicial" placeholder="Saldo inicial">
        <input type="submit" value="Confirmar">
        <p>A conta deve ter o saldo de no minimo R$ 200,00 para ser criada {!}</p>
    </form>
</body>
</html>