<?php

session_start();

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
        <img src="images_calculadora/carro_sombra.png" width=120 height=120>
      </div>

      <form action="calculadora_2.php" method="post">

        <div class="form_calc">
              

          <div class="form_calc_1">
            <div class="form_item_top">
              <label for="gaso1">Quanto de gasolina você costuma gastar por mês?</label><br><br>
              <input type="number" id="gaso1" name="gaso1"><br>
            </div>
              
            <div class="form_item_bottom">
              <label for="gaso2">Quanto de diesel você costuma gastar por mês?</label><br><br>
              <input type="number" id="gaso2" name="gaso2">
            </div>
          </div>

          <div class="form_calc_2">
            <div class="form_item_top">
              <label for="gaso3">Seu carro é econômico?</label> <br><br>
              <input class="input_radio" type="radio" name="gaso3" value="sim"/> Sim<br />
              <input class="input_radio" type="radio" name="gaso3" value="nao"/> Não<br />

            </div>

            <div class="form_item_bottom">
              <label for="gaso4">Quanto de etanol você costuma gastar por mês?</label><br><br>
              <input type="number" id="gaso4" name="gaso4">
            </div>  
          </div>

        </div>

      

    </div>

      <button class="button_ok" type="submit">OK!</button>  
      </form>
  </body>

</html>

