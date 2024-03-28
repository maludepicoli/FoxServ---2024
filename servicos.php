<?php include_once ("config.php"); 
session_start();
$tipoServico = $_GET['tipoServico'];

$email = $_SESSION['email'];

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) ){
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
    <link rel="stylesheet" href="servicos.css">
    <link rel="icon" href="logo/lilas-2.PNG">
    <script src="modo_escuro.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<?php
                    $q = "SELECT nomeTipoServico FROM tipoServico where idTipoServico = '$tipoServico'";
                          if($resultado=mysqli_query ($conexao, $q)){
                            $nomeTipoServico = array();
                            
                                  while ($registro=mysqli_fetch_assoc($resultado)) {
                                $nomeTipoServico = $registro['nomeTipoServico'];
                                  }
                          }
                    
                ?>
    <title>Serviços de <?php echo $nomeTipoServico; ?></title>
</head>

<body>


    <div class="main">
        <div class="left">
            <div class="logo-header">

                <?php
                    if(($_SESSION['tipo']) == "comum")
                    {
                        echo '<h1 class="logo"><a href="home.php"> Fox<span class="foxserv">Serv</span></a></h1>';
                    
                    }
                    if(($_SESSION['tipo']) == "profissional")
                    {
                        echo '<h1 class="logo"><a href="homeProf.php"> Fox<span class="foxserv">Serv</span></a></h1>';
                    
                    }
                ?>
                <div class="modo_escuro">
                    <input type="checkbox" name="change-theme" id="change-theme" />
                    <label for="change-theme">
                        <i class="bi bi-sun"></i>
                        <i class="bi bi-moon"></i></label>
                </div>
            </div>
            <div class="servicos">
                <?php
                    $q = "SELECT nomeTipoServico FROM tipoServico where idTipoServico = '$tipoServico'";
                          if($resultado=mysqli_query ($conexao, $q)){
                            $nomeTipoServico = array();
                            
                                  while ($registro=mysqli_fetch_assoc($resultado)) {
                                $nomeTipoServico = $registro['nomeTipoServico'];
                                  }
                          }
                    
                ?>
                <h1>Qual serviço de <?php echo $nomeTipoServico; ?> você está precisando?</h1>
                <div class="botoes">
            <?php
            
            $sql = "SELECT s.nomeServico, s.idServico, t.nomeTipoServico, t.idTipoServico, t.imagemClaro, t.imageEscuro  
            FROM tipoServico t  
            INNER JOIN  servico s
            ON t.idTipoServico = s.idTipoServico 
            WHERE t.idTipoServico = '$tipoServico'";

            if($resultado=mysqli_query ($conexao, $sql)){
                $nomeServico = array();
                $idServico = array();
                $imagemClaro = array();
                $imageEscuro= array();
                $nomeTipoServico = array();
                $i = 0;

                while ($registro=mysqli_fetch_assoc($resultado)) {
                    $nomeServico[$i] = $registro['nomeServico'];
                    $idServico[$i] = $registro['idServico'];
                    $imagemClaro = $registro['imagemClaro'];
                    $imageEscuro = $registro['imageEscuro'];
                    $nomeTipoServico = $registro['nomeTipoServico'];
        ?>
                    <button class="servico" onclick="document.location='profissionais.php?servico=<?php echo $nomeServico[$i]; ?>'"> <?php echo $nomeServico[$i]; ?> <span class="material-symbols-outlined">
                        arrow_forward
                    </span> </button>
                    <?php
                     $i++;
                }
            }
            
        ?> 
                    
                    
                </div>

            </div>
        </div>
        <div class="right">
            <img src="image/<?php echo $imagemClaro; ?>" class="img-right-modoClaro">
            <img src="image/<?php echo $imageEscuro; ?>" class="img-right-modoEscuro">
        </div>
    </div>

</body>

</html>