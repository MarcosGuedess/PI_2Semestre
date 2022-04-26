<?php
session_start();
header('Cache-Control: no cache');

if(!isset($_POST['lixo1']) || !isset($_POST['lixo2'])){
  header("location: calculadora_1.php");
  exit;
}

if(!isset($_SESSION['soma'])){
  header("location: calculadora_1.php");
  exit;
}

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Calculadora de CO²</title>
    <link rel="stylesheet" href="estilo_calculadora.css">
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
                            <h4><?php echo $_SESSION['soma']; ?> kg</h4>
                        </div>
                    </div>

              </div>
        </div>

      

    </div>

    <a href="perfil_usuario.php">
      <button class="button_ok">
        OK!
      </button>
    </a>
  </body>

</html>

