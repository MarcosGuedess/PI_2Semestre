<?php

require '../ClassSession.php';

$ss = new Session_User();

$id = $ss->check_loggedin();

if(!isset($_POST['animal1']) || !isset($_POST['animal2']) || !isset($_POST['animal3']) || !isset($_POST['animal4']) ){
  header("location: calculadora_1.php");
  exit;
}


$_SESSION['soma_lixo'] = $_POST['animal1'] + $_POST['animal2'] + $_POST['animal3'] + $_POST['animal4'];


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

      <div class="image_calc">
        <img src="images_calculadora/lixo_sombra.png" width=120 height=120>
      </div>

      <form action="calculadora_result.php" method="post">
        
        <div class="form_calc">

           
          <div class="form_calc_lix">

            <div>
              <div class="form_item_top">
                <label for="lixo1">Você costuma reclicar o seu lixo?</label><br><br>
                <input class="input_radio" type="radio" name="lixo1" value="sim"/> Sim<br />
                <input class="input_radio" type="radio" name="lixo1" value="nao"/> Não<br />
              </div>
              
              <div class="form_item_bottom">
                <label for="lixo2">Você faz compostagem?</label><br><br>
                <input class="input_radio" type="radio" name="lixo2" value="sim"/> Sim<br />
                <input class="input_radio" type="radio" name="lixo2" value="nao"/> Não<br />
              </div>
            </div>

          </div>

        </div>

      

    </div>

      <button class="button_ok" type="submit">OK!</button>  
      </form>
  </body>

</html>

