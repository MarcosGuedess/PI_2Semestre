<?php
    $exp = 80;
?>

<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "pi_2semestre";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=1;

$sql = "SELECT u.id as id, u.nome as nome, u.foto_perfil as foto, 
        p.pontuacao_quiz as pont, p.resultado_calc as calc, 
        p.atividades_completas as ativd, p.nivel as niv 
        FROM usuario u, pontuacao p 
        WHERE u.id = p.id_usuario";

$result = $conn->query($sql);

if ($result) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $nome_user = $row["nome"];
    $foto_user = $row["foto"];
    $pontuacao_quiz = $row["pont"];
    $calculo = $row["calc"];
    $nivel = $row["niv"];
    $atividade = $row["ativd"];
  }
} else {
  echo "0 results";
}
$conn->close();

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Perfil de <?php echo $nome_user; ?> </title>
    <link rel="stylesheet" href="estilo_perfil.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body style="background-color: bisque;">
      <div class="container">
      
      <div class="mx-auto" style="background-color: #212741;">
          <br><br>
          <div class="user_photo"> 
            <img src="<?php echo $foto_user; ?>" width=20% height=20% class="rounded-circle" alt="Imagem de perfil.">
          </div>
          <br>
          <div class="text-center">
              <h3 style="color: white;"><?php echo $nome_user; ?></h3>
              <h5 style="color: white;">Nível <?php echo $nivel; ?></h4>
              <br>
              <div class="col-md-6 offset-md-3"> 
              <div class="progress">
                <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="<?php echo $exp ?>" aria-valuemin="0" aria-valuemax="100" style=" background-color: #ff511a; width: 75%"></div>
              </div>
          </div>
          <br><br>
          <div>


          </div>
      </div>

      <div class="container" style="background-color: #ff511a;">
        
        <br><h2 class="text-center">Pontuação</h2><br>
        <div class="row">

          <div class="col">
            <div class="card text-center" style="width: 100%;">
              <div class="card-body">
                <img src="images_calculadora/quiz.png" width=30% height=30%><br><br>
                <h5 class="card-title">Pontuação do quiz</h5>
                <p class="card-text"><?php echo $pontuacao_quiz?> pontos</p>
                <a href="#" class="btn btn-primary"> Acessar Quiz</a>
              </div>
            </div>
          </div><br><br>

          <div class="col">
            <div class="card text-center" style="width: 100%;">
              <div class="card-body">
                <img src="images_calculadora/arvore_1.png" width=30% height=30%><br><br>
                <h5 class="card-title">Árvores plantadas</h5>
                <p class="card-text"><?php echo $atividade?></p>
                <a href="#" class="btn btn-primary">Atualizar</a>
              </div>
            </div>
          </div><br><br>

          <div class="col">
            <div class="card text-center" style="width: 100%;">
              <div class="card-body">
                <img src="images_calculadora/co22.png" width=30% height=30%><br><br>
                <h5 class="card-title">Quantidade de CO²</h5>
                <p class="card-text"><?php echo $calculo?> kgCO²</p>
                <a href="#" class="btn btn-primary">Calculadora</a>
              </div>
            </div>
          </div>
        </div><br><br>
      </div>

      

    </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

