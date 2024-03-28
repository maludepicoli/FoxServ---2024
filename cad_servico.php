<?php
include_once('config.php');

session_start();
 
$email = $_SESSION['email'];

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
    exit(); 
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cad_servico.css">
    <link rel="icon" href="logo/lilas-2.PNG">
    <script src="modo_escuro.js" defer></script>
    <script src="limiteTexto.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Cadastrar Serviços</title>
</head>

<body>


    <div class="main">
        <div class="left">
            <div class="logo-header">

                <h1 class="logo"><a href="homeProf.php"> Fox<span class="foxserv">Serv</span></a></h1>
                <div class="modo_escuro">
                    <input type="checkbox" name="change-theme" id="change-theme" />
                    <label for="change-theme">
                        <i class="bi bi-sun"></i>
                        <i class="bi bi-moon"></i></label>
                </div>
            </div>
            <form class="card-form">
                <h1>Cadastrar Serviço</h1>
                <h2>Preencha os campos para gerar o contrato do serviço</h2>
                <div class="linha">
                    <div class="textfield">
                        <label for="cpf">CPF do Cliente <span class="required"> * </span></label>
                        <input type="text" id="cpf" name="cpf" placeholder="000.000.000-00">
                    </div>
                    <div class="textfield">
                        <label for="nome">Nome do Cliente <span class="required"> * </span></label>
                        <input type="text" name="nome" placeholder="Digite o nome do seu cliente">
                    </div>                    
                    
                </div>
                <div class="linha">
                    <div class="textfield">
                        <label for="cat_serv">Serviço Realizado <span class="required"> * </span></label>
                        <select name="cat_serv" id="cat_serv">
                            <option value="" selected disabled>Selecione o Serviço</option>
                            <option value="" >Selecione o Serviço</option>
                        </select>
                    </div>
                    <div class="textfield">
                        <label for="valor">Valor do Serviço </label>
                        <input type="text" name="valor" placeholder="Digite o valor">
                    </div>                    
                </div>
                <div class="linha">
                    <div class="textfield">
                        <label for="data_serv_inicio">Data inicial <span class="required"> * </span></label>
                        <input type="date" name="data_serv_inicio" id="data_serv_inicio" placeholder="00/00/0000" required>
                    </div>
                    <div class="textfield">
                        <label for="data_serv_fim">Data final <span class="required"> * </span></label>
                        <input type="date" name="data_serv_fim" id="data_serv_fim" placeholder="00/00/0000" required>
                    </div>
                </div>
                <div class="linha">
                    <div class="input-box">
                        <label for="descricao">Descrição <span class="required"> * </span></label>
                        <textarea placeholder="Descreva serviço realizado... <?php   echo $email;?>" required maxlength="100"></textarea>
                        
                        <div class="characters">
                          <span class="min_num">0</span>
                          <span class="limit_num">/100</span>
                        </div>
                      </div>
                    <!-- <div class="textfield">
                        <label for="decricao">Descrição</label>
                        <textarea type="text" name="decricao" row="4" cols="50" placeholder="Descreva o serviço realizado"></textarea>
                        <div class="characters">
                            <span class="min_num">0</span>
                            <span class="limit_num">/100</span>
                          </div>
                    </div>rodapé -->
                </div>

                <div class="linha">

                </div>

                <div class="botao">
                    <input type="submit" name="submit" class="btn-login" id="submit" value="Cadastrar"></input>
                </div>

                <a class="voltar" href="contratos.php">Voltar</a>


            </form>
        </div>
        <div class="right">
            <img src="image/novoServ-modoClaro.png" class="img-right-modoClaro">
            <img src="image/novoServ-modoEscuro.png" class="img-right-modoEscuro">
        </div>
    </div>

</body>

</html>

<?php
   
if (isset($_POST['submit'])) {
    
    $cpf = $_POST['cpf'];
    $valor = $_POST['valor'];
    $data_serv_inicio = $_POST['dataInicial'];
    $data_serv_fim = $_POST['dataFinal'];
    $descricao = $_POST['descricao'];
    
    $idUsu = "SELECT idUsuario FROM usuario WHERE cpf = '$cpf'";

    $idProf = "SELECT email FROM vw_profissionais WHERE email = '$email'";
    
    
    $sql = "INSERT INTO contrato(dataInicial, dataFinal, valor, descricao, idUsuario, idProfissional) 
                  VALUES ('$data_serv_inicio', '$data_serv_fim', '$valor', '$descricao', '$idUsu', '$idProf')";
    
         
if ($idProf && $idUsu && $sql && $_POST) {
      echo "<script> alert('Contrato cadastrado com sucesso.'); </script>";
      unset($_POST);
      header('Location: login.php');
      exit();

}else{
    echo "<script>  alert('Não foi possivel cadastrar o contrato.'); </script>";
}
}
?>





















