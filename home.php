<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@mdi/font@7.4.47/css/materialdesignicons.min.css">
    <title>Document</title>
  </head>
<body>
  <!--<form action="" method="GET">
        <input type="email" name="campoemail" placeholder="Digite seu email">
        <br><br>
        <input type="password" name="camposenha" placeholder="Digite sua senha">
        <br><br>
        <button type="submit">Enviar</button>
     </form>-->
    <?php
       /*if(isset($_GET['campoemail'])){
        $campoemail = $_GET['campoemail'];
        $camposenha = $_GET['camposenha'];
        echo "$campoemail e $camposenha";
     }*/


     ?>
     <!--<form action="" method="POST">
     <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" name="campoemail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Digite seu email">
     </div>
     <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Senha</label>
      <input type="password" name="camposenha" class="form-control" id="exampleInputPassword1" placeholder="Digite sua senha">
     </div>
     <br><br>
     button type="submit" class="btn btn-primary">Enviar</button>
     </form>-->

     <?php
     /*if(isset($_POST['campoemail'])){
     $email = $_POST['campoemail'];
     $senha =$_POST['camposenha'];
      if($email == "ron@gmail.com" && $senha == 123){
            header('location:receber_post.php');
           //echo "Email e senha corresponde";
           }else{
           echo "login efetuado com sucesso";
      }
     }*/
     ?>
     <br><br>
     <?php
     /*$media = 8;
     if($media >= 7){
     echo "Aprovado";
     } elseif($media ==5){
     echo "Recuperação";
     }else{
     echo "Reprovado";
  
     }*/
     
     ?>
     <?php
         if($_SERVER['REQUEST_METHOD'] == "POST"){
          $nome = $_POST['campoNome'];
          $email = $_POST['campoEmail'];
          $senha = $_POST['camposenha'];
          $confirmarsenha = $_POST['campoconfirmarsenha'];
         
         if(empty($nome)){
          $erroNome = "por favor, informe um nome";
         } else {
          if (!preg_match("/^[a-zA-Z-' ]*$/",$nome)) {
            $erroNome = "Digite um nome válido";
          } else {
            $erroNome = "Nenhum";
          }
         }
         if(empty($email)){
          $erroEmail = "por favor, informe um email";
         } else {
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $erroEmail = "Digite um email válido";
          } else {
            $erroNome = "Nenhum";
          }
         }


         if(empty($senha)){
          $erroSenha = "por favor, informe um senha";
         } else {
         if(strlen($senha) <6){
           $erroSenha = "por favor, informe uma senha com seis digitos ou mais"; 
        }else {
            $erroSenha = "Nenhum";
         }
        }

        if(empty($confirmarsenha)){
          $erroconfirmarsenha = "por favor, repetir a senha";
         } else {
         if ($confirmarsenha != $senha) {
           $erroconfirmarsenha = "as senhas precisam ser iguais"; 
        }else {
            $erroconfirmarsenha = "Nenhum";
         }
        }
      }
    


     ?>

     <h1>Validação de Foprmulário</h1>
     <form action="" method="POST">
      <label for="camponome">Nome:</label><br>
      <input type="text" class="form-control <?php if(isset($erroNome)){if($erroNome != "Nenhum"){echo "is-invalid";}}?>" name="campoNome">
      <div class="invalid-feedback">
      <?php
        if(isset($erroNome)){
            if($erroNome != "Nenhum"){
              echo $erroNome;
            }

        }
        ?>
      </div>
      <br>
      <label for="campoemail">Email <i class="mdi mdi-information-outline" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="campo obrigatorio"></i></label><br>
      <input type="email" class="form-control <?php if(isset($erroEmail)){ if($erroEmail != "Nenhum"){ echo "is-invalid";}}?>" novalidate name="campoEmail">
      <div class="invalid-feedback">
      <?php
        if(isset($erroEmail)){
            if($erroEmail != "Nenhum"){
              echo $erroEmail;
            }
          }
        ?>
      </div>
      <br>
      <div>
      <label for="camposenha">Senha:</label><br>
      <input type="password" class="form-control <?php if(isset($erroSenha)){ if($erroSenha!= "Nenhum"){ echo "is-invalid";}} ?>" name="camposenha">
      <div class="invalid-feedback">
      <?php
        if(isset($erroSenha)){
            if($erroSenha != "Nenhum"){
              echo $erroSenha;
            }
          }
          ?>
      </div>
      <br>
      <label for="campoconfirmarsenha">Confirmar Senha:</label> <br>
      <input type="password" class="form-control <?php if(isset($erroconfirmarsenha)){if($erroconfirmarsenha != "Nenhum"){ echo "is-invalid";}}
        ?>" name="campoconfirmarsenha">
      <div class="invalid-feedback">
      <?php
      if(isset($erroconfirmarsenha)){
          if($erroconfirmarsenha != "Nenhum"){
            echo $erroconfirmarsenha;
          }
        }
        ?>
      </div>
      <br><br>
      <button type="submit">Enviar <i class="mdi mdi-send"></i></button>



     </form>
  



     <script src="JS/script.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"   crossorigin="anonymous">

     </script>

     <script>
      const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
      const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap. Tooltip (tooltipTriggerEl))
   </script>
 </body>
</html>
