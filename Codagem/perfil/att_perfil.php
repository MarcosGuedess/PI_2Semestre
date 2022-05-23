<?php

require '../ClassDatabase.php';

$id = 1;

$name_user = $_POST["name_user"];
$contato_updt = $_POST["contato_updt"];
$cidade_updt = $_POST["cidade_updt"];
$pais_updt = $_POST["pais_updt"];
$perfil_pic = $_POST["perfil_pic"];

$Banco = new BancoDados;
?>



<!doctype html>
<html lang="pt_BR">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/estilo_perfil.css" rel="stylesheet">

    <title>Update</title>
  </head>
  <body>
    <div class="container text-center" style="margin-top: 10rem;margin-bottom: 10rem;">
        <div class="container" style="background-color: white">
        <br><br>  
        <h1 class="text-center"> <?php echo $Banco->update_perfil($id, $name_user, $contato_updt, $cidade_updt, $pais_updt, $perfil_pic); ?></h1>
        <br>
            <div class="row-12">
                <a type="button" href="./perfil_usuario.php" class="btn btn-primary">Voltar ao perfil</a>
            </div>
        <br><br><br>   
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>