<?php
session_start();

$gaso = $_SESSION['soma_gaso'];
$casa = $_SESSION['soma_casa'];
$lixo = $_SESSION['soma_lixo'];

$soma = $gaso + $casa + $lixo;

header('Cache-Control: no cache');

if(!isset($_POST['lixo1']) || !isset($_POST['lixo2'])){
  header("location: calculadora_1.php");
  exit;
}

if(!isset($_SESSION['soma_gaso']) || !isset($_SESSION['soma_casa']) || !isset($_SESSION['soma_lixo'])){
  header("location: calculadora_1.php");
  exit;
}

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "pi_2semestre";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=1;

$select = "SELECT resultado_calc from Pontuacao WHERE id = $id";

$result_select = $conn->query($select);

if ($result_select) {
  while($row = $result_select->fetch_assoc()) {
    $valores_anteriores = $row["resultado_calc"];
  }
} else {
  echo "0 results";
}


$sql = "UPDATE Pontuacao SET resultado_calc = $soma + $valores_anteriores where id = $id";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
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
                            <h4><?php echo $soma ?> kg</h4>
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

