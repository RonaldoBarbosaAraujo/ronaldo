<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="email" name="campoemail" placeholder="Digite seu email">
        <br><br>
        <input type="password" name="camposenha" placeholder="Digite sua senha">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
       if(isset($_GET['campoemail'])){
        $campoemail = $_GET['campoemail'];
        $camposenha = $_GET['camposenha'];
        echo "$campoemail e $camposenha";
       }


    ?>

    
</body>
</html>
