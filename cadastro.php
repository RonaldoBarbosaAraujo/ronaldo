<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php 


       
        require('conexao.php');
        $sql = $pdo->prepare("SELECT * FROM funcionarios");
        $sql->execute();
        $dados = $sql-> fetchAll();

        


        /*$sql=$pdo->prepare("INSERT INTO veiculo VALUES(NULL, 'Polo', 'RET5F77')");
        $sql->execute();

        require('conexao.php');
        $sql=$pdo->prepare("INSERT INTO veiculo VALUES(NULL, 'HB20', 'JKT5F77')");
        $sql->execute();

        require('conexao.php');
        $sql=$pdo->prepare("INSERT INTO veiculo VALUES(NULL, 'Civic', 'RPF1A77')");
        $sql->execute();

        //resultados
        $sql = $pdo->prepare("SELECT * FROM veiculo");
        $sql -> execute();
        $dados = $sql-> fetchAll();
      */
      ?>

    
<form class="row g-3 needs-validation" novalidate>
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Nome</label>
    <input type="text" class="form-control" id="validationCustom01" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">Sobrenome</label>
    <input type="text" class="form-control" id="validationCustom02" value="" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Endereco</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Cidade</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom04" class="form-label">Estado</label>
    <select class="form-select" id="validationCustom04" required>
      <option selected disabled value="">Choose...</option>
      <option>...</option>
    </select>
    <div class="invalid-feedback">
      Please select a valid state.
    </div>
  </div>
  <div class="col-md-3">
    <label for="validationCustom05" class="form-label">CEP</label>
    <input type="text" class="form-control" id="validationCustom05" required>
    <div class="invalid-feedback">
      Please provide a valid zip.
    </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Enviar</button>
  </div>
</form>


     <table class="table caption-top">
     <caption>List of users</caption>
     <thead>
       <tr>
         <th scope="col">Codigo</th>
         <th scope="col">Nome</th>
         <th scope="col">Sobrenome</th>
         <th scope="col">CPF</th>
         <th scope="col">Endereco</th>
         <th scope="col">Cidade</th>
         <th scope="col">Funcao</th>
       </tr>
     </thead>
     <tbody>



     <?php
      
        foreach($dados as $dado){
          echo '<tr>
                  <th scope="row">'.$dado["Codigo"].'</th>
                  <td>'.$dado["PrimeiroNome"].'</td>
                  <td>'.$dado["SegundoNome"].'</td>
                  <td>'.$dado["CPF"].'</td>
                  <td>'.$dado["Endereco"].'</td>
                  <td>'.$dado["Cidade"].'</td>
                  <td>'.$dado["Funcao"].'</td>
                </tr>';
        }
        echo"</table>";
       


       
      ?>
       




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>