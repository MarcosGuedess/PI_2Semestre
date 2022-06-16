<?php

require '../Classes/ClassDatabase.php';
require '../Classes/ClassSession.php';

$ss = new Session_User();
$perfil = new BancoDados();

$id = $ss->check_loggedin();

$gaso = $_SESSION['soma_gaso'];
$casa = $_SESSION['soma_casa'];
$lixo = $_SESSION['soma_lixo'];

$soma_tudo = $gaso + $casa + $lixo;

if(!isset($_POST['lixo1']) || !isset($_POST['lixo2'])){
  header("location: calculadora_1.php");
  exit;
}

if(!isset($_SESSION['soma_gaso']) || !isset($_SESSION['soma_casa']) || !isset($_SESSION['soma_lixo'])){
  header("location: calculadora_1.php");
  exit;
}

$select = $perfil->select_user($id);

$perfil->__destruct();
$perfil->__construct();

$new_pontuacao = $soma_tudo + $select['calc'];

$result = $perfil->update_calculadora($new_pontuacao, $id);


$perfil->__destruct();

$perfil->__construct();

$perfil->add_experiencia($id, 140);

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Calculadora de CO²</title>
    <link rel="stylesheet" href="./css/estilo_calculadora.css">
  </head>

  <body class="body_calculadora">

    <div class="calculadora">

      <div class="result_title">
        <h3 class="text_result">Resultado</h3>
      </div>

      

        <div class="form_calc">
              <div class="result_box">
                    <h3 class="text_result">Seu gasto mensal é:</h3>

                    <div class="result_co2">
                        <div>
                            <img src="images_calculadora/planeta.png" width=120 height=120>
                        </div>
                        <div class="CO2_total">
                            <h4><?php echo $result ?> kg</h4>
                        </div>
                    </div>

              </div>
        </div>

      

    </div>

    <a href="../perfil/perfil_usuario.php">
      <button class="button_ok">
        OK!
      </button>
    </a>
  </body>

</html>

