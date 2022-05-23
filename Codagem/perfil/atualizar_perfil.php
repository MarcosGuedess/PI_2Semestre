<?php
require '../ClassDatabase.php';
$id = 1;

$perfil = new BancoDados;

$row = $perfil->select_user($id);

$nivel = $row['niv'];
$nome_user = $row["nome"];
$foto_user = $row["foto"];
$contato = $row["contato"];
$cidade = $row["cidade"];
$pais = $row["pais"];

$nivel = 40;

?>


<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="./css/estilo_perfil.css" rel="stylesheet">

    <title>Atualizar perfil de <?php echo $row['nome']?></title>
  </head>
  <body>
    <div class="container text-center">
    <form method="POST" class="row g-3" action="./att_perfil.php" style="margin-top: 5%; margin-bottom: 10%;">

        <h1 class="text-center">Atualizar informações</h1>
        <br><br>

        <div class="col-md-4 offset-md-4">
            <label for="name_user" class="form-label fw-bold">Nome</label>
            <input type="text" class="form-control" name="name_user" id="name_user" value="<?php echo $nome_user?>" required>
        </div>

        <div class="col-md-4 offset-md-4">
            <label for="contato_updt" class="form-label fw-bold">Contato</label>
            <input type="number" class="form-control" name="contato_updt" id="contato_updt" value="<?php echo $contato?>" required>
        </div>

        <div class="col-md-4 offset-md-4">
            <label for="cidade_updt" class="form-label fw-bold">Cidade</label>
            <input type="text" class="form-control" name="cidade_updt" id="cidade_updt" value="<?php echo $cidade; ?>" required>
        </div>       

        <div class="col-md-4 offset-md-4">
            <label for="pais_updt" class="form-label fw-bold">País</label>
            <input type="text" class="form-control" name="pais_updt" id="pais_updt" value="<?php echo $pais; ?>" required>
        </div>

        <div>
            <div class="col-md-4 offset-md-4">
                <label for="perfil_pic" class="form-label fw-bold">Foto de perfil</label>
                <select class="form-select" name="perfil_pic" id="perfil_pic" required>
                    <option value="<?php $foto_user; ?>"></option>
                    <?php
                    $perfil->icon_nivel($nivel)
                    ?>
                </select>
            </div>
        </div>

        <div class="row-12">
            <a href="./perfil_usuario.php"><img src="./images_perfil/back_2.png" class="media-object rounded-circle img-responsive img-thumbnail"></a>
            <button type="submit" class="btn btn-secondary">Atualizar</button>
        </div>

    </div>
    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>