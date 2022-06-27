<?php

require './Classes/ClassDatabase.php';

if(!isset($_POST['name'])){
    header("location: ./html/index.html");
}
else{
$name = $_POST['name'];
$username = $_POST['username'];
$contato = $_POST['contato'];
$pais = $_POST['pais'];
$cidade = $_POST['cidade'];
$password = $_POST['password'];
//$foto_perfil = 'default.jpg';

$db = new BancoDados();

$log = $db->adicionar_user($username, $password, $name, $contato, $cidade, $pais);
$login = $db->login_site($username, $password);
}
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
    <br><br> <br><br> <br>
        <div class="container">
            <aside>
                <div class="secao">
                    <img src="image/Logo.png">
                    <br><br><br>
                    <h1>Faça a diferença!</h1>
                    <br><br>
                    <h3>Clique em login e vamos iniciar</h3>
                </div>
            </aside>

            <div class="cadastro">
                <br><br><br><br><br><br><br>
                <h1><?php echo $log; ?></h1>
                <br><br><br>
                
                <form action="./html/login.html" >
                        <button>LOGIN</button>
                </form>

                <form action="./html/cadastro.html" >        
                        <br>
                        <button>VOLTAR</button>
                </form>
            </div>         
            
        </div>
        <br><br> <br><br> <br>
    </main>
    <footer class='centro'>Desenvolvimento Fatec &copy; 2022</footer>
    

</body>
</html>
