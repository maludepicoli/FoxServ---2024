<?php
include_once('config.php');
session_start();
$email = $_SESSION['email'];
if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="cad_prof.css">
    <link rel="icon" href="logo/lilas-2.PNG">
    <script src="modo_escuro.js" defer></script>
    <script src="limiteTexto.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <title>Cadastro</title>
</head>

<body>

    <div class="main_gradiente">
        <!-- fundo degradê -->
        <div class="main">
            <!-- parte principal -->
            <div class="left">
                <!-- lado esquerdo com informações do cadastro e 'cabeçalho'-->
                <div class="logo-header">

                    <h1 class="logo"><a href="home.php"> Fox<span class="foxserv">Serv</span></a></h1>
                    <div class="modo_escuro">
                        <input type="checkbox" name="change-theme" id="change-theme" />
                        <label for="change-theme">
                            <i class="bi bi-sun"></i>
                            <i class="bi bi-moon"></i></label>
                    </div>
                </div>
                <form class="card-form" action="cad_prof.php" method="POST" enctype="multipart/form-data">
                    <!-- campos do cadastro -->
                    <h1>Cadastro do Profissional</h1>
                    <div class="linha">
                        <div class="textfield">
                            <label for="idTipoServico">Categoria <span class="required"> * </span></label>
                            <select name="idTipoServico[]" id="idTipoServico">
                                <option value="" selected disabled>Escolha a Categoria <span class="required"> * </span></option>
                                <?php
					$result_cat_post = "SELECT * FROM tipoServico ORDER BY nomeTipoServico";
					$resultado_cat_post = mysqli_query($conexao, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['idTipoServico'].'">'.$row_cat_post['nomeTipoServico'].'</option>';
					}
				?>
                            </select>
                        </div>
                        <style type="text/css">
			.carregando{
				color:#ff0000;
				display:none;
			}
		</style>
                        <div class="textfield">
				<label for="idServico">Subcategoria:</label>
			<span class="carregando">Aguarde, carregando...</span>
			<select class= "idServico" name="idServico[]" id="idServico"  >
				<option value="" selected disabled >Escolha a Subcategoria</option>
			</select>
			</div>
                        
                    </div>
                <div class="linha">
                        <div class="textfield">
                            <label for="idTipoServico2">Categoria</label>
                            <select name="idTipoServico[]" id="idTipoServico2">
                                <option value="" selected disabled>Escolha a Categoria</option>
                                <?php
					$result_cat_post = "SELECT * FROM tipoServico ORDER BY nomeTipoServico";
					$resultado_cat_post = mysqli_query($conexao, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['idTipoServico'].'">'.$row_cat_post['nomeTipoServico'].'</option>';
					}
				?>
                            </select>
                        </div>
                        <style type="text/css">
			.carregando2{
				color:#ff0000;
				display:none;
			}
		</style>
                        <div class="textfield">
				<label for="idServico2">Subcategoria:</label>
			<span class="carregando2">Aguarde, carregando...</span>
			<select class= "idServico" name="idServico[]" id="idServico2"  >
				<option value="" selected disabled >Escolha a Subcategoria</option>
			</select>
			</div>
                        
                    </div>
                    <div class="linha">
                        <div class="textfield">
                            <label for="idTipoServico3">Categoria</label>
                            <select name="idTipoServico[]" id="idTipoServico3">
                                <option value="" selected disabled>Escolha a Categoria</option>
                                <?php
					$result_cat_post = "SELECT * FROM tipoServico ORDER BY nomeTipoServico";
					$resultado_cat_post = mysqli_query($conexao, $result_cat_post);
					while($row_cat_post = mysqli_fetch_assoc($resultado_cat_post) ) {
						echo '<option value="'.$row_cat_post['idTipoServico'].'">'.$row_cat_post['nomeTipoServico'].'</option>';
					}
				?>
                            </select>
                        </div>
                        <style type="text/css">
			.carregando3{
				color:#ff0000;
				display:none;
			}
		</style>
                        <div class="textfield">
				<label for="idServico3">Subcategoria:</label>
			<span class="carregando3">Aguarde, carregando...</span>
			<select class= "idServico" name="idServico[]" id="idServico3"  >
				<option value="" selected disabled >Escolha a Subcategoria</option>
			</select>
			</div>
                        
                    </div>
                    <div class="linha">
                        <div class="input-box">
                            <label for="descricao">Descrição <span class="required"> * </span></label>
                            <textarea id="descricao" name="descricao" placeholder="Descrição dos serviços, habilidades, idiomas..." required maxlength="100">  </textarea>
                            
                            <div class="characters">
                              <span class="min_num">0</span>
                              <span class="limit_num">/100</span>
                            </div>
                          </div>
                    </div>
<div class="invisivel">
    <input type="text" name="idUsuario" class="invisivel" value="<?php if((isset($_SESSION['email'])==true) and (isset($_SESSION['senha'])==true)){
                        
                        $sqlid = "SELECT idUsuario FROM usuario WHERE email='$email'";
                        $resultId = $conexao->query($sqlid);
                        
                        if($resultado=mysqli_query ($conexao, $sqlid)){
                            $idUsuario = array();
                
                            
                        }
                    echo $idUsuario;
                    
                    }  ?>"></input>
</div>

                    <div class="botao">
                        <input type="submit" name="submit" class="btn-login" id="submit" value="Cadastrar"></input>
                    </div>
                    <div class="cadastro">
                        <label for="cadastro"> Já é profissional?</label>
                        <a class="cadastrar_se" href="login.php">Entrar</a>
                    </div>

                </form>
                <script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript"> google.load("jquery", "1.4.2");</script>
		
		<script type="text/javascript">
		$(document).ready( function(){
			$('#idTipoServico').change(function(){
				if( $(this).val() ) {
					$('#idServico').hide();
					$('.carregando').show();
					$.getJSON('subcategoria.php?search=',{idTipoServico: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="" selected disabled>Escolha Subcategoria</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].idServico + '">' + j[i].nomeServico + '</option>';
						}	
						$('#idServico').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#idServico').html('<option value="">– Escolha Subcategoria –</option>');
				}
			});
		});
		</script>
		<script type="text/javascript">
		$(document).ready( function(){
			$('#idTipoServico2').change(function(){
				if( $(this).val() ) {
					$('#idServico2').hide();
					$('.carregando2').show();
					$.getJSON('subcategoria2.php?search=',{idTipoServico2: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="" selected disabled>Escolha Subcategoria</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].idServico + '">' + j[i].nomeServico + '</option>';
						}	
						$('#idServico2').html(options).show();
						$('.carregando2').hide();
					});
				} else {
					$('#idServico2').html('<option value="">– Escolha Subcategoria –</option>');
				}
			});
		});
		</script>
		<script type="text/javascript">
		$(document).ready( function(){
			$('#idTipoServico3').change(function(){
				if( $(this).val() ) {
					$('#idServico3').hide();
					$('.carregando3').show();
					$.getJSON('subcategoria3.php?search=',{idTipoServico3: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="" selected disabled>Escolha Subcategoria</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].idServico + '">' + j[i].nomeServico + '</option>';
						}	
						$('#idServico3').html(options).show();
						$('.carregando3').hide();
					});
				} else {
					$('#idServico3').html('<option value="">– Escolha Subcategoria –</option>');
				}
			});
		});
		</script>
            </div>
            <div class="right">
                <!-- lado direito, contém apenas a imagem -->
                <img src="image/cadastro-modoClaro.png" class="img-right-modoClaro"> <!-- mudar a imagem em 'src' -->
                <img src="image/cadastro-modoEscuro.png" class="img-right-modoEscuro">
            </div>
        </div>
    </div>
</body>

</html>

<?php

if (isset($_POST['submit'])) {

    $idTipoServico = $_POST['idTipoServico'];
    $idServico = $_POST['idServico'];
    $descricao = $_POST['descricao'];
    $idUsuario =  $_POST['idUsuario'];
  
    $result = mysqli_query($conexao, "INSERT INTO profissional(descricao, idUsuario) 
           VALUES ('$descricao', '$idUsuario')");
    $last_id = mysqli_insert_id($conexao);
          
    $sqlUpdate = mysqli_query ( $conexao, "UPDATE usuario SET tipo = 'profissional' WHERE idUsuario = '$idUsuario'");
    
    for($i=0;$i < count($idTipoServico); $i++){
       $query = "INSERT INTO servico_profissional(idProfissional, idServico, idTipoServico) 
          VALUES ($last_id, '$idServico[$i]', '$idTipoServico[$i]' )";
       $result2 = mysqli_query($conexao, $query);
   }
}
          
          
          
?>
<!-- quando for copiar para outra tela, mudar apenas os campos e as imagens
e apagar as divs de 'linha' que não for usar-->