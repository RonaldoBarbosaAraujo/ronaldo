<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/style.css">
    
</head>
<body> 
   <?php
   $nome = "Ronaldo";
   $sobrenome = "Barbosa";
   ?>
    
   
    <?php

     function media($nota1, $nota2, $nota3, $nota4){
          $mediafinal = ($nota1 + $nota2 + $nota3 + $nota4)/4;
          return $mediafinal;
        
      }
      echo (media(9, 5, 10, 10));
    ?>
    <h1>Ronaldo</h1>
   
  

   <scrip src= "JS/script.js"></script> 
</body>
</html>