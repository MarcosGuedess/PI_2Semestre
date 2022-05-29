<?php

require 'ClassDatabase.php';

$username = $_POST['username'];
$password = $_POST['password'];

$db = new BancoDados();

$db->__construct();
$login = $db->login_site($username, $password);

?>


<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href='../style.css'>

</head>
<body class="cadastrar">
    <header>
        <ul>
            <a href="#"><li>Home</li></a>
            <a href="#"><li>Calculadora De CO2</li></a>
            <a href="#"><li>Sobre Nós</li></a>
            <a href="#"><li>Acervos</li></a>
            <a href="#" id="title"><li>Cadastre-Se</li></a>
        </ul>
    </header>
    <main>
        <div class="container">
            <aside>
                <div class="secao">
                    <img src="../Image/Terra.png">
                    <br><br><br>
                    <h1>Mantenha-se ativo</h1>
                    <br><br>
                    <h3>Todos nós podemos contribuir!</h3>
                </div>
            </aside>

            <div class="cadastro">
                <br><br><br>
                <h1>Estávamos te esperando!</h1>
                <br><br><br>
                
                <form action="../index.php" >
                        <h2><?php echo "Seu id corresponde a ".$login; ?><h2>
                        
                        <br><br>
                        <button>IR PARA HOME</button>
                </form>

                <form action="../index_cadastro.php" >        
                        <br>
                        <button>VOLTAR</button>
                </form>
            </div>         
            
        </div>
    </main>
    <footer class='centro'>Desenvolvimento Fatec &copy; 2022</footer>
    

</body>
</html>