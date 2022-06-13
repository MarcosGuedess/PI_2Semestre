<?php

require './Classes/ClassDatabase.php';
require './Classes/ClassSession.php';

$username = $_POST['username'];
$password = $_POST['password'];

$db = new BancoDados();
$ss = new Session_User();

$db->__construct();
$id = $db->login_site($username, $password);

$ss->check_session($id);

?>


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href='./html/style.css'>

</head>
<body class="cadastrar">
    <header>
        <ul>
            <a href="./html/index.html"><li>Home</li></a>
            <a href="./html/doacao.html"><li>Doação</li></a>
            <a href="./html/login.html"><li>Login</li></a>
            <a href="./html/cadastro.html" id="title"><li>Cadastre-se</li></a>
        </ul>
    </header>
    <main>
        <div class="container">
            <aside>
                <div class="secao">
                    <img src="image/Terra.png">
                    <br><br><br>
                    <h1>Mantenha-se ativo</h1>
                    <br><br>
                    <h3>Todos nós podemos contribuir!</h3>
                </div>
            </aside>

            <div class="cadastro">
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <h2>Não foi possível conectar!<h2>
                <form action="./html/login.html" >        
                        <br>
                        <button>VOLTAR</button>
                </form>

            </div>         
            
        </div>
    </main>
    <footer class='centro'>Desenvolvimento Fatec &copy; 2022</footer>
    

</body>
</html>