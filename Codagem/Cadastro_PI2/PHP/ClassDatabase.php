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
        $sql = "INSERT INTO usuario (username, passw, nome, contato, cidade, pais, foto_perfil) ";
        $sql = $sql."VALUES ('".$username."', '".$passw."', '".$nome."', '".$contato ."', '".$cidade."', '".$pais."', '".$foto_perfil."')";
        if (mysqli_query($this->conn, $sql)) {
            $print = "Cadastro feito com sucesso";
            return $print;
        } else {
            $print = "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            return $print;
        }
    }

    
    public function login_site($user, $pass){ 
        $sql = "SELECT id FROM Usuario WHERE username = ('".$user."') AND passw = ('".$pass ."')";
        if (mysqli_query($this->conn, $sql)) {
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result) <= 0){
                return "nenhum id";
            }else{
                $row = $result->fetch_assoc();
                return $row['id'];
            }
        }else {
            return "Nenhum id encontrado";
        }
    }

    public function select_user($id){
        $sql = "SELECT u.id as id, u.nome as nome, u.foto_perfil as foto, 
        u.cidade as cidade,u.pais as pais, u.contato as contato, p.pontuacao_quiz as pont, p.resultado_calc as calc, 
        p.expe as expe, p.arvores as arvores, p.nivel as niv 
        FROM usuario u, pontuacao p 
        WHERE u.id = p.id_usuario";

        $result = mysqli_query($this->conn, $sql); 

        if ($result) {
            return $row = $result->fetch_assoc();
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }

}
?>