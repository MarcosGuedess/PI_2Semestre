<?php

session_start();

header('Cache-Control: no cache');

if(!isset($_POST['casa1']) || !isset($_POST['casa2']) || !isset($_POST['casa3']) || !isset($_POST['casa4']) ){
  header("location: calculadora_1.php");
  exit;
}

$soma = $_SESSION['soma'];
$_SESSION['soma'] = $soma + $_POST['casa1'] + ($_POST['casa2'] * 38) + $_POST['casa3'] + ($_POST['casa4'] * 22.674);


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

      <div class="image_calc">
        <img src="images_calculadora/porco_sombra.png" width=120 height=120>
      </div>

      <form action="calculadora_4.php" method="post">

        <div class="form_calc">
              

          <div class="form_calc_1">
            <div class="form_item_top">
              <label for="animal1">Quanto você consome de carne bovina por mês?</label><br><br>
              <input type="number" id="animal1" name="animal1" required><br>
            </div>
              
            <div class="form_item_bottom">
              <label for="animal2">Quanto você consome de carne de frango por mês?</label><br><br>
              <input type="number" id="animal2" name="animal2" required>
            </div>
          </div>

          <div class="form_calc_2">
            <div class="form_item_top">
              <label for="animal3">Quanto você consome de carne suína por mês?</label> <br><br>
              <input type="number" id="animal3" name="animal3" required>

            </div>

            <div class="form_item_bottom">
              <label for="animal4">Qual a média do consumo mensal de leite de vaca?</label><br><br>
              <input type="number" id="animal4" name="animal4" required>
            </div>  
          </div>

        </div>

      

    </div>

      <button class="button_ok" type="submit">OK!</button>  
      </form>
  </body>

</html>

