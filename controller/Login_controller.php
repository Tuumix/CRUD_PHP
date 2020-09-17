<?php
class Login_controller{
    public function login(){
        include("config/conexao.php");
        session_start();
    
        if(isset($_GET['email']) && isset($_GET['password'])){
            $email = mysqli_real_escape_string($conexao, $_GET['email']);
            $password = mysqli_real_escape_string($conexao, $_GET['password']);
        
            $query = "select * from usuario where email = '{$email}' and senha = '{$password}';";
            echo $query;
            $result = mysqli_query($conexao, $query);
            $row = mysqli_num_rows($result);
            if($row > 0){
                $_SESSION['email'] = $email;
                header('Location: main.php');
                exit();
            }else{
                header('Location: index.php');
                $_SESSION['authenticated'] = false;
                exit();
            }
        }else{
            header('Location: index.php');
            $_SESSION['not_authenticated'] = false;
            exit();
        }
    }
}
?>
