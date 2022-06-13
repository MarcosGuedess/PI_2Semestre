<?php 
class Session_User{

    public function check_session($id){
        session_start();
        if($id>0){
            $_SESSION['loggedin'] = TRUE;
            $_SESSION["id"] = $id;
                header("location: ./perfil/perfil_usuario.php");
        } else {
            $_SESSION['loggedin'] = FALSE;
        }
    }

    public function check_loggedin(){
        session_start();
        if(!isset($_SESSION["id"]) || $_SESSION["loggedin"] != TRUE){
            header("location: ./html/login.html");
            exit;
        }
        else{
            return $_SESSION["id"];
        }
    }
    

    public function end_session(){
        session_start();

        $_SESSION = array();
        
        session_destroy();
        
        header("location: ./html/login.html");
        exit;
    }

}
?>