<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "empresa";

    $pdo = new PDO("mysql:host=$servidor; dbname=$banco", $usuario, $senha);

?>