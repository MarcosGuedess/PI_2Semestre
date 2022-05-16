<?php
session_start();

$soma = $somar;

header('Cache-Control: no cache');

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "pi_2semestre";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$id=1;

$select = "SELECT pontuacao_quiz from Pontuacao WHERE id = $id";

$result_select = $conn->query($select);

if ($result_select) {
  while($row = $result_select->fetch_assoc()) {
    $valores_anteriores = $row["pontuacao_quiz"];
  }
} else {
  echo "0 results";
}


$sql = "UPDATE Pontuacao SET pontuacao_quiz = $soma + $valores_anteriores where id = $id";

if (mysqli_query($conn, $sql)) {
  echo "";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz interativo</title>
    <link rel="stylesheet" href="style_quiz.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body class="quiz">
    <header>
        <ul>
            <a href="#"><li>Home</li></a>
            <a href="#"><li>Calculadora De CO2</li></a>
            <a href="#"><li>Sobre Nós</li></a>
            <a href="#"><li>Acervos</li></a>
            <a href="#" id="title"><li>Cadastre-Se</li></a>
        </ul>
    </header>
    <main class="tela-principal">

        <section class="container">

            <h1>Questão</h1>

            <article class='centro' id='instrucoes'>
                Leia atentamente e escolha sua resposta
            </article>

            <article class='imagem'>
                <img src="Images/Urso.jpg"  id="tela">
            </article>


            <article class='questoes'>
                <header1 class='questao'>
                    <span id='numQuestao'></span>
                    <h2 id='pergunta'></h2>
                </header1>

                <div class='corpo'>
                    <ol type='A' id='alternativas'>
                        <br>
                        <li id='a' value='1A' class='respostas' onClick='verificar(this,this)'></li>
                        <br>
                        <li id='b' value='1B' class='respostas' onClick='verificar(this,this)'></li>
                        <br>
                        <li id='c' value='1C' class='respostas' onClick='verificar(this,this)'></li>
                    </ol>
                </div>
            </article>
            <br>
            <article id='aviso'>Questão <span id='numero'></span> de <span id='total'></span></article>

            <article class='opcao' onclick=location.reload()>
                Jogar novamente
            </article>

            <article class='opc' onclick="location.href='index.php'">
                Sair
            </article>
            

        </section>

        
    </main>
    <footer class='centro'>Copyright &copy; 2022 Desenvolvimento Fatec</footer>
    
<audio preload src="Assets/Correct.mp3" id="acerto"></audio>
<audio preload src="Assets/Incorrect.mp3" id="erro"></audio>
<audio preload src="Assets/Victory.mp3" id="final"></audio>

<script src="Quiz/quiz.js"></script>
</body>
</html>