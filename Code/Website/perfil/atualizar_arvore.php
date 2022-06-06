<?php
require '../ClassDatabase.php';

$perfil = new BancoDados;

require '../ClassSession.php';

$ss = new Session_User();

$id = $ss->check_loggedin();


$row = $perfil->select_user($id);

$arvores = $row['arvores'];

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Atualizar Árvores</title>
    <link rel="stylesheet" href="./css/estilo_perfil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body style="background-color: bisque;">
    <div class="container" style="margin-top: 10%;">

        <div class="row">
            <div class="col">
            <img src="./images_perfil/arvore_colorida.png" class="mx-auto d-block" style="height: 80%; width 80%;">

            </div>

            <div class="col">
            <form method="POST" action="./att_trees.php" style="margin-top: 5rem">
                <br>
                <h2 class="text-center"> Atualizar Árvores </h2>
                
                <input type="number" class="form-control" name="arvore_name" id="arvore_name" value="<?php echo $arvores; ?>" required>

                <div class="row justify-content-center" style="margin-top: 2rem;">
                    <a href="./perfil_usuario.php"><img src="./images_perfil/back_2.png" class="media-object rounded-circle img-responsive img-thumbnail"></a>
                    <button type="submit" class="btn btn-secondary">Atualizar</button>
                </div>
                <br><br><br><br><br>
            </form>
            </div>
        </div>
    </div>



      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

