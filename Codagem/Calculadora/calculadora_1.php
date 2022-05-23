<?php

session_start();

header('Cache-Control: no cache');

$_SESSION['soma'] = 0;

?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Calculadora de CO²</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilo_calculadora.css">
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
              <input type="number" id="gaso1" name="gaso1" required><br>
            </div>
              
            <div class="form_item_bottom">
              <label for="gaso2">Quanto de diesel você costuma gastar por mês?</label><br><br>
              <input type="number" id="gaso2" name="gaso2" required>
            </div>
          </div>

          <div class="form_calc_2">
            <div class="form_item_top">
              <label for="gaso3">Seu carro é econômico?</label> <br><br>
              <input class="input_radio" type="radio" name="gaso3" value="sim"> Sim<br />
              <input class="input_radio" type="radio" name="gaso3" value="nao"> Não<br />
              
            </div>

            <div class="form_item_bottom">
              <label for="gaso4">Quanto de etanol você costuma gastar por mês?</label><br><br>
              <input type="number" id="gaso4" name="gaso4" required>
            </div>  
          </div>

        </div>

      

    </div>

      <button class="button_ok" type="submit">OK!</button>  
      </form>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>

</html>

