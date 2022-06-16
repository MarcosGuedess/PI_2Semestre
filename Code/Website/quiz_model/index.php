<?php
$soma = +50;

require '../Classes/ClassDatabase.php';
require '../Classes/ClassSession.php';

$ss = new Session_User();
$perfil = new BancoDados();

$id = $ss->check_loggedin();

$select = $perfil->select_user($id);

$perfil->__destruct();
$perfil->__construct();

$new_pontuacao = $soma + $select['pont'];

$result = $perfil->update_quiz($new_pontuacao, $id);

$perfil->__destruct();
$perfil->__construct();

$perfil->add_experiencia($id, $soma * 2);

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
            <a href="../index.php"><li>Home</li></a>
            <a href="#"><li>Calculadora De CO2</li></a>
            <a href="../index.php"><li>Sobre Nós</li></a>
            <a href="../realizar_logout.php"><li>Acervos</li></a>
            <a href="../../index.php" id="title"><li>Cadastre-Se</li></a>
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

            <article class='opc' onclick="location.href='../perfil/perfil_usuario.php'">
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