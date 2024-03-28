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
    <link rel="stylesheet" href="FeedUsuario.css">
    <link rel="stylesheet" href="contatos.css">
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

    <title>Feed</title>
</head>

<body>
<!-- cabeçalho -->
    <nav class="nav">
        <div class="container">
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

                
                <button class="menu"><img class="foto_menu" src="upload/<?php echo $fotoPerfil[$i]; ?>"> Olá, <?php echo $nome[$i]; ?> <span
                        class="material-symbols-outlined">
                        expand_more
                    </span> </button>
                    <div class="dropdown-content">
                        <?php
                    if(($_SESSION['tipo']) == "comum")
                    {
                        echo'<a href="home.php"><span class="material-symbols-outlined">
                            home
                            </span>Home</a>
                        <a href="contrato_cliente.php"><span class="material-symbols-outlined">
                            description
                            </span>Serviços Contratados</a>
                            <a href="editarCliente.php"><span class="material-symbols-outlined">
                                edit
                                </span>Editar Dados</a>
                                <a href="telaEstatica.php"><span class="material-symbols-outlined">
                                person
                                </span>Seja um Profissional</a>
                                
                            <a class="sair" href="sair.php"><span class="material-symbols-outlined">
                                logout
                            </span>Sair</a>';
                    
                    }
                    else
                    {
                        
                    echo'
                        <ul>
                        <a href="FeedProf.php"><span class="material-symbols-outlined">
                                    person
                                </span>Meu Perfil</a>
                            <a href="homeProf.php"><span class="material-symbols-outlined">
                                    home
                                </span>Home</a>
                            <a href="contratos.php"><span class="material-symbols-outlined">
                                    description
                                </span>Meus Contratos</a>
                            
                            <a class="sair" href="sair.php"><span class="material-symbols-outlined">
                                    logout
                                </span>Sair</a>
                        </ul>';
                    }
                ?>
                      </div>
                    </div>
                <div>
                    <input type="checkbox" name="change-theme" id="change-theme" />
                    <label for="change-theme">
                        <i class="bi bi-sun"></i>
                        <i class="bi bi-moon"></i></label>
                </div>
            </ul>
        </div>]
                      <?php 
                     $i++;
                }
            }
            
            
        ?>
    </nav>

    <main>
        <!-- parte principal -->
        <div class="perfil">
            <!-- informações do profissional -->
            <div class="usuario">
                <div class="foto">
                    <img class="foto-perfil" src="image/foto_instagram.jpg">
                </div>
                <div class="informacoes">

                    <h1 class="username">Nome de Usuário <span class="material-symbols-outlined">
                            check_circle
                        </span></h1>
                        <div class="infos-extras">
                            <p class="localizacao"> 
                                <span class="material-symbols-outlined">
                                    location_on
                                    </span> Cidade, UF
                            </p>
                            <p class="tip-serv"> | </p>
                            <p class="idade"> 
                                <span class="material-symbols-outlined">
                                    perm_contact_calendar
                                    </span> 0 anos
                            </p>
                            <p class="tip-serv"> | </p>
                            <p class="idade"> 
                                <span class="material-symbols-outlined">
                                    contract
                                    </span> 0 Contratos
                            </p>
                            </div>
                    <div class="serv-tip">
                        <p class="tip-serv">Tipo de Serviço</p>
                        <p class="tip-serv"> , </p>
                        <p class="serv"> Serviço</p>
                    </div>
                    
                    <p class="descricao">Descrição das caracteristicas, atuações e habilidades do profissional.</p>
                </div>

                <div class="estrelas">
                    <ul class="avaliacao">
                        <li class="star-icon" data-avaliacao="1"></li>
                        <li class="star-icon" data-avaliacao="2"></li>
                        <li class="star-icon" data-avaliacao="3"></li>
                        <li class="star-icon" data-avaliacao="4"></li>
                        <li class="star-icon ativo" data-avaliacao="5"></li>
                        <p>0 Avaliações</p>
                    </ul>
                    <div class="botao2">
                        
                        <button class="contratos" onclick="openModal('dv-modal')"> <span class="material-symbols-outlined">
                                contact_page
                            </span> Entre em Contato</button>
                    </div>
                    
                    <div class="botao2">
                        
                        <button class="excluir" href=""> <span class="material-symbols-outlined">
                                report
                            </span> Denunciar Perfil</button>
                    </div>
                    
                </div>
            </div>
            <div class="feed">
                <div class="botoes">
                    <button  onclick="funcaoAparecerPublicacoes()" class="publi">Publicações </button>
                    <button onclick="funcaoAparecerAvaliacoes()" class="avali">Avaliações </button>

                </div>

                <div class="publicacoes">
                        <!-- publicações do profissional -->
                        <!-- cada 'card-perfil' é um post -->
                    <div class="card_perfil">
                        <div class="img-perfil">
                            <img class="img-profile" src="image/foto_instagram.jpg">
                        </div>
                        <div class="legenda">
                            <p class="legenda">Legenda da Publicação...</p>
                            <div class="data_like">
                                <p class="data">00/00/0000</p>
                                <span class="material-symbols-outlined">
                                    favorite
                                    </span>
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
                                <img src="image/foto_instagram.jpg" class="image-header">
                            </div>
                            <div class="header-info">
                                <h4>Nome do Cliente </h4>
                                <p>00/00/0000</p>
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
                            <p>Comentário do Cliente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<div id="dv-modal" class="modal">
            <div class="alert-modal">
                <div class="modal-header">
                    <h1><span class="material-symbols-outlined">
perm_phone_msg
</span></h1>
                </div>
                <div class="modal-body">
                    <h2>Entre em contato com o profissional</h2>

                </div>
                <div class="modal-footer">
                    <div class="botoes_modal">
                        <div class="contato">
                    <a href="https://api.whatsapp.com/send?phone=5515"><button class="btn-modal" > <span class="material-symbols-outlined">
                                    message
                                    </span> WhatsApp</button></a>
                    <a><button class="btn-modal"><span class="material-symbols-outlined">
                                    phone
                                    </span> 00 000000000</button></a>
                    <a><button class="btn-modal" href="mailto:tccinotec@gmail.com"><span class="material-symbols-outlined">
                                    email
                                    </span> email</button></a>
                    </div>
                    <button class="cancelar" onclick="closeModal('dv-modal')"><span class="material-symbols-outlined">
cancel
</span></button>
                    </div>
                    
                </div>
            </div>
        </div>
        </div>
</body>


</html>
