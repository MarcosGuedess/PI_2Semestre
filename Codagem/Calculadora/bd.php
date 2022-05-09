<?php 
class BancoDados{
    private $servername = '127.0.0.1';
    private $username = 'root';
    private $password = '';
    private $dbname = "pi_2semestre";
    private $conn;

    public function __construct(){
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$this->conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    public function __destruct(){
        mysqli_close($this->conn);
    }

    public function adicionar_user($username, $passw, $nome, $contato, $cidade, $pais, $foto_perfil){
        $sql = "INSERT INTO Usuario ( 'username', 'passw', 'nome', 'contato', 'cidade', 'pais', 'foto_perfil') ";
        $sql = $sql."VALUES ('".$username."', '".$passw."', ".$nome.", '".$contato ."', '".$cidade."', '".$pais."', '".$foto_perfil."')";
        if (mysqli_query($this->conn, $sql)) {
            echo "Cadastro feito com sucesso";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }



    public function select_user($soma, $id){
        $sql = "SELECT u.id as id, u.nome as nome, u.foto_perfil as foto, 
        p.pontuacao_quiz as pont, p.resultado_calc as calc, 
        p.atividades_completas as ativd, p.nivel as niv 
        FROM usuario u, pontuacao p 
        WHERE u.id = p.id_usuario";

        $result = $this->conn->query($sql);

        if ($result) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $nome_user = $row["nome"];
            $foto_user = $row["foto"];
            $pontuacao_quiz = $row["pont"];
            $calculo = $row["calc"];
            $nivel = $row["niv"];
            $atividade = $row["ativd"];
        }
        } else {
        echo "0 results";
        }
    }

    public function update_user($soma, $id){


        $sql = "UPDATE Pontuacao SET resultado_calc = $soma + $select[0] where id = $id";

        if (mysqli_query($this->conn, $sql)) {
            echo "Cadastro feito com sucesso";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        

    }
}
?>