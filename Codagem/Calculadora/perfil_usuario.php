<?php

    $nivel = 1;
    $exp = 80;
    $arvore = 0;
    $pont_quiz = 0;
    $media_co2 = 0;
?>

<?php
$servername = "localhost:3306";
$username = "root";
$password = "";

// Create connection
//$conn = new mysqli($servername, $username, $password);

// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}

//$id=1;

//$sql = "SELECT u.id, u.nome, u.foto_perfil, p.pontuacao_quiz,p.resultado_calc,p.atividades_completas,p.nivel 
//        FROM usuario u, pontuacao p 
//        WHERE u.id = p.id_usuario";
//$result = mysqli_query($conn, $sql);

//mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Perfil Usuário</title>
    <link rel="stylesheet" href="estilo_perfil.css">
  </head>

  <body class="fundo_perfil">
    <div class="user">
        <br><br>
        <div class="user_photo"> 
            <img src="images_calculadora/user.png" width=120 height=120>
        </div>

        <div class="info_user">
            <h3>Nome do Usuário</h3>
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
                <p class="title_stts"><?php echo $pont_quiz?> pontos</p>
                <button>Quiz</button>
            </div>
        </div>
        <br> <br>
        <div class="div_status">
            <div class="img_sts">  
                <img src="images_calculadora/arvore.png" width=120 height=120>
            </div>

            <div class="pont_sts">
                  <p class="title_stts"><?php echo $arvore?> plantadas</p>
                  <button>Atualizar</button>
            </div>
        </div>
        <br> <br>
        <div class="div_status">
            <div class="img_sts">  
                <img src="images_calculadora/co22.png" width=120 height=120>
            </div>

            <div class="pont_sts">  
                  <p class="title_stts"><?php echo $media_co2?> kgCO²</p>
                  <a href="calculadora_1.php"><button>Calcular</button>
            </div>
        </div>

    </div>

  </body>

</html>

