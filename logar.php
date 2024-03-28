<?php
include_once('config.php');
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: login.php');
    exit();
    
} else {
    
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    $select_email2 = "SELECT nome FROM usuario WHERE email = '{$email}'";
    $resultado2 = mysqli_query($conexao, $select_email2);
    $linha2 = mysqli_num_rows($resultado2);

    if($linha2 == 1) {
        
        $query = "SELECT email FROM usuario WHERE email = '{$email}' AND senha = md5('{$senha}')";
        $result2 = mysqli_query($conexao, $query);
        $linha2 = mysqli_num_rows($result2);
    
        if($linha2 == 1){
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: home.php');
            exit();
            
        } else {
            header('Location: login.php?erro=1');
          
        }
    
    } else {
            header('Location: login.php?erro=1');
          
        }
}

?>