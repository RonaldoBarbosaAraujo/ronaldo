<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //codigo para criar pasta
        $pasta = "arquivos/";
        if(!is_dir($pasta)){
            mkdir($pasta, 0755);
        }
        //codigo para criar arquivo e texto utilizando comandos PHP
        $nomearquivo = "meu-documento.txt";
        $arquivo = fopen($pasta.$nomearquivo, 'a+');
        fwrite($arquivo, 'Linha 1'.PHP_EOL);
        fwrite($arquivo, 'Linha 2'.PHP_EOL);
        fwrite($arquivo, 'Linha 3'.PHP_EOL);
        fwrite($arquivo, 'Linha 4'.PHP_EOL);
        fwrite($arquivo, 'Linha 5' .PHP_EOL);
        fclose($arquivo);

        $caminhoarquivo = $pasta.$nomearquivo;
        if(file_exists($caminhoarquivo) && is_file($caminhoarquivo)){
            $abrirarquivo = fopen($caminhoarquivo, 'r');
            while(!feof($abrirarquivo)){
                echo fgets($abrirarquivo)."<br>"; 
            }
        }



    ?>
</body>
</html>