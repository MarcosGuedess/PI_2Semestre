<?php

require '../Classes/ClassDatabase.php';

$perfil = new BancoDados;

require '../Classes/ClassSession.php';

$ss = new Session_User();

$id = $ss->check_loggedin();

$row = $perfil->select_user($id);

$nome_user = $row["nome"];
$foto_user = $row["foto"];
$pontuacao_quiz = $row["pont"];
$calculo = $row["calc"];
$nivel = $row["niv"];
$expe = $row["expe"];
$arvores = $row["arvores"];
$cidade = $row["cidade"];
$pais = $row["pais"];

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Perfil de <?php echo $nome_user; ?> </title>
    <link rel="stylesheet" href="./css/estilo_perfil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body style="background-color: bisque;">
      <div class="container">
      
      <div class="mx-auto" style="background-color: #212741;">
          <br><br>
          <div class="user_photo"> 
            <img src="./images_perfil/<?php echo $foto_user; ?>.png" width=20% height=20% class="rounded-circle" alt="Imagem de perfil.">
          </div>
          <br>
          <div class="text-center">
              <h3 style="color: white;"><?php echo $nome_user; ?></h3>
              <h6 style="color: white;"><?php echo $cidade?>, <?php echo $pais ?></h4>
              <br>
              <h5 style="color: white;">Nível <?php echo $nivel; ?></h4>

              <div class="col-md-6 offset-md-3"> 
                <div class="progress">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $expe ?>" aria-valuemin="0" aria-valuemax="100" style=" background-color: #ff511a; width: <?php echo $expe ?>%"></div>
                </div>  
                <br>
                <div class="row justify-content-md-center">
                  <a href="./atualizar_perfil.php" class="btn btn-light"> Editar Perfil</a>
                  <a href="../realizar_logout.php" class="btn btn-light" style="margin-left: 2%"> Sair</a>
                </div>
              </div>
          </div>    
          <br><br>
      </div>

      <div class="container" style="background-color: #ff511a;">
        
        <br><h2 class="text-center">Pontuação</h2><br>
        <div class="row">

          <div class="col">
            <div class="card text-center" style="width: 100%;">
              <div class="card-body">
                <img src="./images_perfil/icon_quiz2.png" width=50% height=50%><br><br>
                <h5 class="card-title">Pontuação do quiz</h5>
                <p class="card-text"><?php echo $pontuacao_quiz?> pontos</p>
                <a href="../quiz_model/index.php" class="btn btn-primary"> Acessar Quiz</a>
              </div>
            </div>
          </div><br><br>

          <div class="col">
            <div class="card text-center" style="width: 100%;">
              <div class="card-body">
                <img src="./images_perfil/icon_arvores2.png" width=50% height=50%><br><br>
                <h5 class="card-title">Árvores plantadas</h5>
                <p class="card-text"><?php echo $arvores?></p>
                <a href="./atualizar_arvore.php" class="btn btn-primary">Atualizar</a>
              </div>
            </div>
          </div><br><br>

          <div class="col">
            <div class="card text-center" style="width: 100%;">
              <div class="card-body">
                <img src="./images_perfil/icon_co22.png" width=50% height=50%><br><br>
                <h5 class="card-title">Quantidade de CO²</h5>
                <p class="card-text"><?php echo $calculo?> kgCO²</p>
                <a href="../Calculadora/calculadora_1.php" class="btn btn-primary">Calculadora</a>
              </div>
            </div>
          </div>
        </div><br><br>




        <div class="container" style="background-color: white; width: 100%; margin-top: 2%;">
                <div class="card-header" style="width: 100%;">
                  <h1 class="text-center"> Conquistas </h1>
                </div><br>
            
              
              <div class="row">
                <?php echo $perfil->conquistas_nivel($nivel); ?>
              </div>    <br>
        </div><br><br>


      </div>

      

    </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
