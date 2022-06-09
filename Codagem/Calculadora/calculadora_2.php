<?php

session_start();

header('Cache-Control: no cache');

if(!isset($_POST['gaso1']) || !isset($_POST['gaso2']) || !isset($_POST['gaso4'])){
  header("location: calculadora_1.php");
  exit;
}

$_SESSION['soma_gaso'] = ($_POST['gaso1'] * 2.28) + ($_POST['gaso2'] * 2.7) + ($_POST['gaso4'] * 1.51);

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
        <img src="images_calculadora/casa_sombra.png" width=120 height=120>
      </div>

      <form action="calculadora_3.php" method="post">

        <div class="form_calc">
              

          <div class="form_calc_1">
            <div class="form_item_top">
              <label for="casa1">Quantas pessoas moram na sua casa?</label><br><br>
              <input type="number" id="casa1" name="casa1" required><br>
            </div>
              
            <div class="form_item_bottom">
              <label for="casa2">Quantos botijões de gás você compra por mês?</label><br><br>
              <input type="number" id="casa2" name="casa2" required>
            </div>
          </div>

          <div class="form_calc_2">
            <div class="form_item_top">
              <label for="casa3">Qual a média do consumo mensal de energia em KWH?</label> <br><br>
              <input type="number" id="casa3" name="casa3" required><br>
            </div>

            <div class="form_item_bottom">
              <label for="casa4">Quanto você gasta por mês de gás encanado?</label><br><br>
              <input type="number" id="casa4" name="casa4" required>
            </div>  
          </div>

        </div>

      

    </div>

      <button class="button_ok" type="submit">OK!</button>  
      </form>
  </body>

</html>

