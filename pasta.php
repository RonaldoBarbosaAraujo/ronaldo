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
        /*$pasta = "arquivos/";
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
        }*/
        //apagar pasta
        /*if(is_dir($pasta)){
            foreach(scandir($pasta) as $lixo){
                $caminho = $pasta.$lixo;
                if(is_file($caminho)){
                    unlink($pasta.$lixo);
                }
            }
            rmdir($pasta);
        }*/
        //imprimir data
        /*$dataAgora = date("Y/m/d");
        $horaAgora = date("H:i:s");
        echo "$dataAgora";*/


      //codigo de calculos de vencimento de boleto
        /*$hoje = "2024-06-17";
        $vencimento = "2024-06-17";

        $diferença = strtotime($vencimento) - strtotime($hoje);
        $AteVencimento = floor($diferença) / (60*60*24);
            if($AteVencimento > 0){
            echo "Seu boleto vencerá em $AteVencimento dias";
          } elseif($AteVencimento < 0){
            $valor = $AteVencimento * (-1);
            echo "Seu boleto venceu à $valor dias";
          }else {
            echo "Se ferrou! O boleto vence hoje";
        }*/
    ?>
    <?php
     /*class carro{
        public $marca;
        public $modelo;
        public $cor;
        public function __construct($marca, $modelo, $cor){
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->cor = $cor;
        }
        public function mensagem(){
            echo "o carro é $this->marca e a cor é $this->cor";
        }
    }

    $carro1 = new carro("Hyundai", "HB20", "Prata");
    $carro2 = new carro("Chevrolet", "Onix", "Branco");
    $carro3 = new carro("Nissan", "VTR", "Preto");
    $carro4 = new carro("Volkswagem", "Gol", "Branco");

    echo $carro4->marca, "<br>";
    echo $carro4->mensagem();*/

    class funcionario{
        public $nome;
        public $idade;
        public $funcao;
        public $religiao;
        public function __construct($nome, $idade, $funcao, $religiao){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->funcao = $funcao;
            $this->religiao = $religiao;
        }

        public function mensagem(){
            echo "O funcionário tem $this->idade e se chama $this->nome";
        }

    }

    $funcionario1 = new funcionario("Pedro", "18 anos", "Gastronomo","evangelico");
    $funcionario2 = new funcionario("Maria", "19 anos", "Medica","evangelico");
    $funcionario3 = new funcionario("Ronaldo", "48 anos", "Gerente","protestante");
    $funcionario4 = new funcionario("Antonio", "20 anos", "Pedreiro","catolico");

    echo $funcionario3->mensagem(),"<br>";
    echo "Vai ocupar a função de: $funcionario3->funcao";
   


    
              

    ?>
</body>
</html>