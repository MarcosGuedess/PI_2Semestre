<?php

require '../ClassDatabase.php';

$LoginBD = new BancoDados;

$LoginBD->login_site($_POST['usr'], $_POST['pass']);

?>