<?php
include_once('config.php');
session_start();

if(empty($_POST['email']) || empty($_POST['senha'])){
    header('Location: login.php');
    echo "<script>
          alert('Insira valores validos');
      </script>";
    exit();
    
} else {
    
$email = mysqli_real_escape_string($conexao, trim($_POST['email']));
$senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

$sql = "SELECT idUsuario FROM profissional WHERE idUsuario = (SELECT idUsuario FROM usuario WHERE email = '$email' AND senha = md5('{$senha}')";
    $result = mysqli_query($conexao, $sql);

if ($result->num_rows == 1) {
    header("Location: homeProf.php");
    exit();
} else {
    $sql = "SELECT email FROM usuario WHERE email = '$email' AND senha = md5('{$senha}')";
$result = mysqli_query($conexao, $sql);
    

    if ($result->num_rows == 1) {
        header("Location: home.php");
        exit();
    } else {
        header('Location: login.php?erro=1');
    }
}
}
?>
