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
  </head>

  <body class="container">
    <div class="user">
        <br><br>
        <div class="user_photo"> 
            <img src="images_calculadora/user.png" width=120 height=120>
        </div>

        <div class="info_user">
            <h3><?php echo $nome_user; ?></h3>
            <h4>Nível <?php echo $nivel; ?></h4>

            <div class="progress_bar">    
                <div class="inside_bar" style="height: .5rem; 
                                               background-color:white;
                                               width: <?php echo $exp; ?>%;">
                </div>  
            </div>

        </div>

    </div>
    
    <div class="user_status">
        <br>
        <div class="pontu_title">
            <h2>Pontuação:<h3>
        </div>

        <br>
        <div class="div_status">
            <div class="img_sts">  
                <img src="images_calculadora/quiz.png" width=120 height=120>
            </div>

            <div class="pont_sts">
                <p class="title_stts"><?php echo $pontuacao_quiz?> pontos</p>
                <button>Quiz</button>
            </div>
        </div>
        <br> <br>
        <div class="div_status">
            <div class="img_sts">  
                <img src="images_calculadora/arvore.png" width=120 height=120>
            </div>

            <div class="pont_sts">
                  <p class="title_stts"><?php echo $atividade?> plantadas</p>
                  <button>Atualizar</button>
            </div>
        </div>
        <br> <br>
        <div class="div_status">
            <div class="img_sts">  
                <img src="images_calculadora/co22.png" width=120 height=120>
            </div>

            <div class="pont_sts">  
                  <p class="title_stts"><?php echo $calculo?> kgCO²</p>
                  <a href="calculadora_1.php"><button>Calcular</button>
            </div>
        </div>

    </div>

  </body>

</html>

