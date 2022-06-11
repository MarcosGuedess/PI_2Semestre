<?php 
class BancoDados{
    private $servername = '127.0.0.1';
    private $username = 'root';
    private $password = '';
    private $dbname = "ourburden";
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

    public function adicionar_user($username, $password, $name, $contato, $cidade, $pais){
        $sql = "CALL add_usuario('".$username."', '".$password."', '".$name."', '".$contato ."', '".$cidade."', '".$pais."')";
        if (mysqli_query($this->conn, $sql)) {
            $print = "Cadastro feito com sucesso";
            return $print;
        } else {
            $print = "Error: " . $sql . "<br>" . mysqli_error($this->conn);
            return $print;
        }
    }

    
    public function login_site($user, $password){ 
        $sql = "SELECT id FROM Usuario WHERE username = ('".$user."') AND passw = ('".$password ."')";
        if (mysqli_query($this->conn, $sql)) {
            $result = mysqli_query($this->conn, $sql);
            if (mysqli_num_rows($result)<=0){
                return false;
            }else{
                $row = $result->fetch_assoc();
                return $row['id'];
            }
        }else {
            return false;
        }
    }

    public function select_user($id){
        $sql = "CALL select_usuario($id)";
        $result = mysqli_query($this->conn, $sql); 

        if ($result) {
            return $row = $result->fetch_assoc();
        } 
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }

    public function update_calculadora($soma, $id){
        $sql = "UPDATE Pontuacao SET resultado_calc = '$soma' WHERE id_usuario = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return $soma;
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }

    public function update_quiz($soma, $id){
        $sql = "UPDATE Pontuacao SET pontuacao_quiz = '$soma' WHERE id_usuario = '$id'";
        $result = mysqli_query($this->conn, $sql);
        if ($result) {
            return "";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }

    public function update_perfil($id, $nome, $contato, $cidade, $pais, $foto_perfil){
        $sql = "UPDATE Usuario SET nome = '$nome', contato = '$contato', cidade = '$cidade', pais = '$pais', foto_perfil = '$foto_perfil'  where id = '$id';";
        if (mysqli_query($this->conn, $sql)) {
            echo "Atualização feita com sucesso";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }

    public function update_arvore($id, $num_arvores){
        $sql = "UPDATE Pontuacao SET arvores = $num_arvores where id = $id";

        if (mysqli_query($this->conn, $sql)) {
            echo "Atualização feita com sucesso";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($this->conn);
        }
    }

    public function icon_nivel($nivel){
        if ($nivel >= 1) {
            echo '<option value="wonderwoman_1">Mulher Maravilha</option>
            <option value="superman_1">Super homem</option>';
        } if ($nivel >= 5) {
            echo '<option value="spider_man_1">Homem aranha</option>
            <option value="flash_1">Flash</option>
            <option value="green_greenlantern_1">Lanterna verde</option>';
        } if ($nivel >= 10) {
            echo '<option value="ironman_1">Homem de ferro</option>
            <option value="capitain_america_1">Capitão América</option>';
        } if ($nivel >= 15) {
            echo '<option value="batman_1">Batman</option>
            <option value="robin_1">Robin</option>';
        } if ($nivel >= 20) {
            echo '<option value="wonderwoman">Mulher Maravilha - Rosto</option>
            <option value="superman">Super homem - Rosto</option>';
        } if ($nivel >= 25) {
            echo '<option value="wolverine">Wolverine</option>
            <option value="thor">Thor</option>';
        } if ($nivel >= 30) {
            echo '<option value="spiderman">Homem aranha - Rosto</option>
            <option value="deadpool">Deadpool - Rosto</option>';
        }
        if ($nivel >= 35) {
            echo '<option value="batman">Batman - Rosto</option>';
        }
    }

    public function conquistas_nivel($nivel){
        if ($nivel >= 1) {
            echo '<div class="col"><figure class="figure">
                    <img src="./images_perfil/medalha.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <p class="text-center">Nova conta!</p>
                </figure></div>';
        } if ($nivel >= 5) {
            echo '<div class="col"><figure class="figure">
                    <img src="./images_perfil/medalha.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <p class="text-center"> Nível 5! </p>
                </figure></div>';

        } if ($nivel >= 10) {
            echo '<div class="col"><figure class="figure">
                    <img src="./images_perfil/medalha.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <p class="text-center"> Consciente! </p>
                </figure></div>';

        } if ($nivel >= 15) {
            echo '<div class="col"><figure class="figure">
                    <img src="./images_perfil/medalha.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <p class="text-center"> Nível 15! </p>
                </figure></div>';

        } if ($nivel >= 25) {
            echo '<div class="col"><figure class="figure">
                    <img src="./images_perfil/medalha.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <p class="text-center"> Vivendo e aprendendo! </p>
                </figure></div>';

        } if ($nivel >= 30) {
            echo '<div class="col"><figure class="figure">
                    <img src="./images_perfil/medalha.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <p class="text-center"> Herói! </p>
                </figure></div>';

        } if ($nivel >= 35) {
            echo '<div class="col"><figure class="figure">
                    <img src="./images_perfil/medalha.png" class="figure-img img-fluid rounded" alt="A generic square placeholder image with rounded corners in a figure.">
                    <p class="text-center"> Nível 35! </p>
                </figure></div>';
        }
    }

}
?>