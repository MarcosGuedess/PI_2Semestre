<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href='style.css'>

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
                    <img src="Image/Terra.png">
                    <br><br><br>
                    <h1>Bem vindo de volta</h1>
                    <br><br>
                    <h3>Acesse sua conta agora mesmo</h3>
                    <br><br><br><br><br>
                    <form action="PHP/cadastro_login.php"> 
                        <button>ENTRAR</button>
                    </form>
                    
                </div>
            </aside>

            <div class="cadastro">
                <h1>Crie sua conta</h1>
                <br>
                
                <form action="PHP/cadastro_registrar.php" method="POST">
                        <input type="text" placeholder="Digite seu nome" name="name" value="" required autofocus>
                        <br><br>
                        <input type="text" placeholder="Digite nome de usuário" name="username" value="" required autofocus>
                        <br><br>
                        <input type="text" placeholder="Digite seu contato" name="contato" value="" required autofocus>
                        <br><br>
                        <input type="text" placeholder="Digite o seu país" name="pais" value="" required autofocus>
                        <br><br>
                        <input type="text" placeholder="Digite o sua cidade" name="cidade" value="" required autofocus>
                        <br><br>
                        <input type="password" placeholder="Digite sua senha" name="password" value="" required autofocus>
                        <br><br>
                        <button type="submit" class=" btn-primary" value="Cadastrou">CADASTRAR</button>
                </form>

                <form action="../index.php"> 
                        <br>
                        <button>VOLTAR</button>
                </form>
            </div>         
            
        </div>
    </main>
    <footer class='centro'>Desenvolvimento Fatec &copy; 2022</footer>
    

</body>
</html>









 
