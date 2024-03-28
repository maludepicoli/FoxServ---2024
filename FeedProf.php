<?php 
 include_once('config.php');
 session_start();
 
$email = $_SESSION['email'];

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) and (!isset($_SESSION['tipo']) == "profissional")){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    unset($_SESSION['tipo']);
    header('Location: login.php');
    exit(); 
}

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="FeedProf.css">
        <link rel="stylesheet" href="modal.css">
        <link rel="stylesheet" href="footer.css">
        <link rel="icon" href="logo/lilas-2.PNG">
        <script src="modo_escuro.js" defer></script>
        <script src="avali-publi.js" defer></script>
        <script src="modal.js" defer></script>
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <?php
            $sql = "SELECT * FROM usuario WHERE email = '$email'";
             if($resultado=mysqli_query ($conexao, $sql)){
                $nome = array(); 
                $sobrenome = array(); 
                $idUsuario = array();
                $i = 0;

                while ($registro=mysqli_fetch_assoc($resultado)) {
                    $nome[$i] = $registro['nome'];
                    $sobrenome[$i] = $registro['sobrenome'];
                    $idUsuario[$i] = $registro['idUsuario'];

            ?>
        <title><?php echo $nome[$i]; ?> <?php echo $sobrenome[$i]; ?></title>
        
         <?php 
                     $i++;
                }
            }
            
            
        ?>
    </head>

<body>
    <!-- cabeçalho -->
    <nav class="nav">
    <div class="container">
        <div class="logo-header">
            <img src="logo/foxserv-branco.PNG" class="img_logo">
            <h1 class="logo"><a class="logo"href="homeProf.php"> Fox<span class="foxserv">Serv</span></a></h1>
        </div>
        
<?php
            $sql = "SELECT * FROM usuario WHERE email = '$email'";
             if($resultado=mysqli_query ($conexao, $sql)){
                $nome = array(); 
                $fotoPerfil = array();
                $idUsuario = array();
                $i = 0;

                while ($registro=mysqli_fetch_assoc($resultado)) {
                    $nome[$i] = $registro['nome'];
                    $fotoPerfil[$i] = $registro['fotoPerfil'];
                    $idUsuario[$i] = $registro['idUsuario'];

            ?>
        <ul>
            <div class="dropdown">
                
                <ul>

                    <div class="menu"><img class="foto_menu" src="upload/<?php echo $fotoPerfil[$i]; ?>"> Olá, <?php echo $nome[$i]; ?> <span
                            class="material-symbols-outlined">
                            expand_more
                        </span> </div>
                    <div class="dropdown-content-prof">
                        <ul>
                            <li onclick="document.location='FeedProf.php'"><img class="foto_menu"src="upload/<?php echo $fotoPerfil[$i]; ?>" >Meu
                                Perfil</li>

                            <li onclick="document.location='homeProf.php'"><span class="material-symbols-outlined">
                                    home
                                </span>Home</li>
                            <li onclick="document.location='contratos.php'"><span class="material-symbols-outlined">
                                    description
                                </span>Meus Contratos</li>
                            <li><span class="material-symbols-outlined">
                                    notifications
                                </span>Notificações
                                <ul>
                                    
                                    <li><img class="foto_menu" src="image/foto_instagram.jpg"> Usuario <br>Curtiu sua Publicação<span class="material-symbols-outlined">
                                            favorite
                                        </span></li>
                                    <hr>
                                    <li><img class="foto_menu" src="image/foto_instagram.jpg"> Usuario <br>Avaliou seu serviço<span class="material-symbols-outlined">
                                            star
                                        </span></li>
                                    <hr>
                                    <li><img class="foto_menu" src="image/foto_instagram.jpg"> Usuario <br>Curtiu sua Publicação<span class="material-symbols-outlined">
                                            favorite
                                        </span></li>
                                    <hr>
                                    <li><img class="foto_menu" src="image/foto_instagram.jpg"> Usuario <br>Avaliou seu serviço<span class="material-symbols-outlined">
                                            star
                                        </span></li>
                                    <hr>
                                    <li><img class="foto_menu" src="image/foto_instagram.jpg"> Usuario <br>Curtiu sua Publicação <span class="material-symbols-outlined">
                                            favorite
                                        </span></li>
                                    <hr>
                                  
                                </ul>
                            </li>
                            <a class="sair" href="sair.php"><span class="material-symbols-outlined">
                                logout
                            </span>Sair</a>
                        </ul>
                    </div>
                </ul>
            </div>
            <?php 
                     $i++;
                }
            }
            
            
        ?>
            <div>
                <input type="checkbox" name="change-theme" id="change-theme" />
                <label for="change-theme">
                    <i class="bi bi-sun"></i>
                    <i class="bi bi-moon"></i></label>
            </div>
        </ul>
    </div>
</nav>

    <main>
        <!-- parte principal -->
        <div class="perfil">
            <!-- informações do profissional -->
            <div class="usuario">
                               <?php
            
            $sql = "SELECT * FROM vw_feedProf WHERE email = '$email'";

            if($resultado=mysqli_query ($conexao, $sql)){
                $nome = array();
                $sobrenome = array();
                $telefone = array();
                $idade = array();
                $fotoPerfil = array();
                $descricao = array();
                $nomeServico = array();
                $nomeTipoServico = array();
                $media = array();
                $cidade = array();
                $uf = array();
                $totalContratos = array();
                $i = 0;

                while ($registro=mysqli_fetch_assoc($resultado)) {
                    $nome[$i] = $registro['nome'];
                    $sobrenome[$i] = $registro['sobrenome'];
                    $telefone[$i] = $registro['telefone'];
                    $idade[$i] = $registro['idade'];
                    $fotoPerfil[$i] = $registro['fotoPerfil'];
                    $descricao[$i] = $registro['descricao'];
                    $nomeServico[$i] = $registro['nomeServico'];
                    $nomeTipoServico[$i] = $registro['nomeTipoServico'];
                    $media[$i] = $registro['media'];
                    $cidade[$i] = $registro['cidade'];
                    $uf[$i] = $registro['uf'];
                    $totalContratos[$i] = $registro['totalContratos'];
        ?>
                <div class="foto">
                    <img class="foto-perfil" src="upload/<?php echo $fotoPerfil[$i]; ?>">
                </div>
                <div class="informacoes">

                    <h1 class="username"><?php echo $nome[$i]; ?> <?php echo $sobrenome[$i]; ?> <span class="material-symbols-outlined">
                            check_circle
                        </span></h1>
                    <div class="infos-extras">
                        <p class="localizacao">
                            <span class="material-symbols-outlined">
                                location_on
                            </span><?php echo $cidade[$i]; ?>, <?php echo $uf[$i]; ?>
                        </p>
                        <p class="tip-serv"> | </p>
                        <p class="idade">
                            <span class="material-symbols-outlined">
                                perm_contact_calendar
                            </span><?php echo $idade[$i]; ?> anos
                        </p>
                        <p class="tip-serv"> | </p>
                        <p class="idade">
                            <span class="material-symbols-outlined">
                                contract
                            </span><?php echo $totalContratos[$i]; ?> Contrato(s)
                        </p>
                    </div>
                    <div class="serv-tip">
                        <p class="tip-serv"><?php echo $nomeServico[$i]; ?>, <?php echo $nomeTipoServico[$i]; ?></p>
                    </div>

                    <p class="descricao"><?php echo $descricao[$i]; ?></p>
                </div>

                <div class="estrelas">
                    <ul class="avaliacao">
                        <li class="star-icon" data-avaliacao="1"></li>
                        <li class="star-icon" data-avaliacao="2"></li>
                        <li class="star-icon" data-avaliacao="3"></li>
                        <li class="star-icon" data-avaliacao="4"></li>
                        <li class="star-icon ativo" data-avaliacao="5"></li>
                        <p><?php echo $media[$i]; ?> Avaliações</p>
                    </ul>
                    <div class="botao">
                        <button class="editar" onclick="document.location='desempenho.php'"><span
                                class="material-symbols-outlined">
                                equalizer
                            </span>Desempenho</button>
                        <button class="contratos" onclick="document.location='contratos.php'"><span
                                class="material-symbols-outlined">
                                feed
                            </span>Meus Contratos</button>
                    </div>
                    <div class="botao">
                        <button class="editar" onclick="document.location='editarDados.php'"><span
                                class="material-symbols-outlined">
                                edit
                            </span>Editar Perfil</button>
                        <button class="contratos" onclick="document.location='redSenha.php'"><span
                                class="material-symbols-outlined">
                                lock_reset
                            </span>Alterar Senha</button>
                    </div>
                    <div class="botao2">

                        <button onclick="openModal('dv-modal')" class="excluir">Excluir Conta</button>
                    </div>

                </div>
                <?php 
                     $i++;
                }
            }
            
        ?>
            </div>
              <div class="feed">
                <div class="botoes">
                    <button onclick="funcaoAparecerPublicacoes()" class="publi">Publicações </button>
                    <button onclick="funcaoAparecerAvaliacoes()" class="avali">Avaliações </button>

                </div>



                <div class="publicacoes">
                    <!-- publicações do profissional -->
                    <!-- cada 'card-perfil' é um post -->
                
                    <div class="card_perfil">
                         <div class="img-perfil">
                            <img class="img-profile" src="upload/baba.png">
                        </div>
                        <div class="legenda">
                            <p class="legenda">Mais um dia de alegria!</p>
                            <div class="data_like">
                                <p class="data">19/10/2023</p>
                                <img class="lixo" src="image/trash_icon_213986.svg">
                            </div>
                        </div>
                    </div>
                     <div class="card_perfil">
                         <div class="img-perfil">
                            <img class="img-profile" src="upload/baba2.jpg">
                        </div>
                        <div class="legenda">
                            <p class="legenda">Amo o que eu faço!</p>
                            <div class="data_like">
                                <p class="data">10/09/2023</p>
                                <img class="lixo" src="image/trash_icon_213986.svg">
                            </div>
                        </div>
                    </div>
                    
                </div>

                <div class="avaliacoes">
                    <!-- avaliações dos clientes -->
                    <!-- cada 'card-av' é um comentário -->
                    <!-- essa parte NAO está visivel (display:none) -->
                    
        <div class="card-av">
            <div class="av-header">
                        <div class="header-img">
                            <img src="upload/JuliaGabriele.jpg" class="image-header">
                        </div>
                        <div class="header-info">
                            <h4>Julia Gabriele</h4>
                            <p>10/09/2023</p>
                        </div>
                        <div class="aspas">
                            <span class="material-symbols-outlined">
                                    format_quote
                            </span>
                        </div>
            </div>
                        <div class="estrela">
                            <ul class="estrela-av">
                                <li class="star-icon" data-avaliacao="1"></li>
                                <li class="star-icon" data-avaliacao="2"></li>
                                <li class="star-icon" data-avaliacao="3"></li>
                                <li class="star-icon" data-avaliacao="4"></li>
                                <li class="star-icon ativo" data-avaliacao="5"></li>
                            </ul>
                        </div>
                        <div class="comentario">
                            <p>Profissinal de confiança, super atenciosa!</p>
                        </div>
                                            
        </div>
         <div class="card-av">
            <div class="av-header">
                        <div class="header-img">
                            <img src="upload/CamilaSouza.jpg" class="image-header">
                        </div>
                        <div class="header-info">
                            <h4>Camila Souza</h4>
                            <p>15/10/2023</p>
                        </div>
                        <div class="aspas">
                            <span class="material-symbols-outlined">
                                    format_quote
                            </span>
                        </div>
            </div>
                        <div class="estrela">
                            <ul class="estrela-av">
                                <li class="star-icon" data-avaliacao="1"></li>
                                <li class="star-icon" data-avaliacao="2"></li>
                                <li class="star-icon" data-avaliacao="3"></li>
                                <li class="star-icon" data-avaliacao="4"></li>
                                <li class="star-icon ativo" data-avaliacao="5"></li>
                            </ul>
                        </div>
                        <div class="comentario">
                            <p>Minhas crianças adoraram, com certeza chamarei mais vezes!</p>
                        </div>
                                            
        </div>
        <div class="card-av">
            <div class="av-header">
                        <div class="header-img">
                            <img src="upload/PedroSilva.jpg" class="image-header">
                        </div>
                        <div class="header-info">
                            <h4>Pedro Silva</h4></h4>
                            <p>03/11/2023</p>
                        </div>
                        <div class="aspas">
                            <span class="material-symbols-outlined">
                                    format_quote
                            </span>
                        </div>
            </div>
                        <div class="estrela">
                            <ul class="estrela-av">
                                <li class="star-icon" data-avaliacao="1"></li>
                                <li class="star-icon" data-avaliacao="2"></li>
                                <li class="star-icon" data-avaliacao="3"></li>
                                <li class="star-icon" data-avaliacao="4"></li>
                                <li class="star-icon ativo" data-avaliacao="5"></li>
                            </ul>
                        </div>
                        <div class="comentario">
                            <p>Conseguiu me atender de ultima hora, muito atenciosa!</p>
                        </div>
                                            
        </div>

                </div>
                <!-- rodapé -->

            </div>
            <div onclick="document.location='novoPost.php'" class="btn-flutuante">
                <span class="material-symbols-outlined">
                    add
                </span>
            </div>
<div id="dv-modal" class="modal">
            <div class="alert-modal">
                <div class="modal-header">
                    <h1><span class="material-symbols-outlined">
                            warning
                        </span></h1>
                </div>
                <div class="modal-body">
                    <h2>Tem certeza que deseja excluir sua conta?</h2>

                </div>
                <div class="modal-footer">
                    <button onclick="" class="btn-modal">Sim</button>
                    <button class="btn-modal" onclick="closeModal('dv-modal')">Cancelar</button>
                </div>
            </div>
        </div>
        </div>
    </main>

</body>


</html>