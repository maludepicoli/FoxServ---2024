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
    <link rel="stylesheet" href="contratos.css">
    <link rel="stylesheet" href="modal.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="logo/lilas-2.PNG">
    <script src="modo_escuro.js" defer></script>
    <script src="modal.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Meus Contratos</title>
</head>

<body>
    <!-- cabeçalho -->
    <nav class="nav">
        <div class="container">
            <div class="logo-header">
                <img src="logo/foxserv-branco.PNG" class="img_logo">
                <h1 class="logo"><a class="logo" href="homeProf.php"> Fox<span class="foxserv">Serv</span></a></h1>
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
                        <div class="dropdown-content">
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
                <div>
                    <input type="checkbox" name="change-theme" id="change-theme" />
                    <label for="change-theme">
                        <i class="bi bi-sun"></i>
                        <i class="bi bi-moon"></i></label>
                </div>
            </ul>
        </div>
              <?php 
                     $i++;
                }
            }
            
            
        ?>
    </nav>

    <main>
        <div class="principal">
            <div class="topo">
                <div class="titulo">
                    <h1>Meus contratos </h1>
                    <p>Confira seus contratos aqui</p>
                    <select>
                        <option value="" selected disabled> Ordenar por </option>
                        <option value=""> Nome </option>
                        <option value=""> Data </option>
                    </select>
                </div>
                <div class="image">
                    <img src="image/contratos-modoClaro.png" class="img-right-modoClaro">
                    <img src="image/contratos-modoEscuro.png" class="img-right-modoEscuro">
                </div>
            </div>
        </div>

        <div class="profissionais">
            <div class="contrato">
                <div class="card_contrato">
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                contract
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                               Status do Contrato
                            </div>
                            <div class="info-texto">
                                Finalizado
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Nome do Cliente
                            </div>
                            <div class="info-texto">
                                Julia Gabriele
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    check_circle
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Serviço Realizado
                            </div>
                            <div class="info-texto">
                                Babá
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                    calendar_month
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Data do Serviço
                            </div>
                            <div class="info-texto">
                                09/09/2023 - 10/09/2023
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                attach_money
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Valor
                            </div>
                            <div class="info-texto">
                                80,00
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            
                                <span class="material-symbols-outlined">
                                    format_align_center
                                </span>
                            
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Descrição
                            </div>
                            <div class="info-texto">
                                Serviço de babá prestado durante um dia e uma noite para uma criança de 5 anos.
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            
                                <span class="material-symbols-outlined">
                                    fact_check
                                </span>
                           
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Número do Contrato
                            </div>
                            <div class="info-texto">
                                234-567
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="contrato-pdf">
                    <button class="btn-pdf">Gerar PDF</button>
                    <button class="lixeira" onclick="openModal('dv-modal')"><span class="material-symbols-outlined">
                                    delete
                                </span></button>
                                <button class="editar" onclick="document.location='editarContrato.php'"><span class="material-symbols-outlined" >
                                    edit
                                </span></button>
                
                                
                </div>
            </div>
            <div class="contrato">
                <div class="card_contrato">
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                contract
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                               Status do Contrato
                            </div>
                            <div class="info-texto">
                                Finalizado
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Nome do Cliente
                            </div>
                            <div class="info-texto">
                                Camila Souza
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    check_circle
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Serviço Realizado
                            </div>
                            <div class="info-texto">
                                Babá
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                    calendar_month
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Data do Serviço
                            </div>
                            <div class="info-texto">
                                14/10/2023 - 15/10/2023 
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                attach_money
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Valor
                            </div>
                            <div class="info-texto">
                                190,00
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    format_align_center
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Descrição
                            </div>
                            <div class="info-texto">
                               Serviço de babá para duas crianças por uma noite.
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    fact_check
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Número do Contrato
                            </div>
                            <div class="info-texto">
                                098-765
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="contrato-pdf">
                    <button class="btn-pdf">Gerar PDF</button>
                <span class="material-symbols-outlined">
                                    delete
                                </span>
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                </div>
            </div>
            <div class="contrato">
                <div class="card_contrato">
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                contract
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                               Status do Contrato
                            </div>
                            <div class="info-texto">
                                Finalizado
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Nome do Cliente
                            </div>
                            <div class="info-texto">
                                Pedro Silva
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    check_circle
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Serviço Realizado
                            </div>
                            <div class="info-texto">
                                Babá
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                    calendar_month
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Data do Serviço
                            </div>
                            <div class="info-texto">
                                01/11/2023 - 01/11/2023
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                attach_money
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Valor
                            </div>
                            <div class="info-texto">
                               70,00 
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    format_align_center
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Descrição
                            </div>
                            <div class="info-texto">
                                Serviço de babá por 3 horas. 
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    fact_check
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Número do Contrato
                            </div>
                            <div class="info-texto">
                                321-098
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="contrato-pdf">
                    <button class="btn-pdf">Gerar PDF</button>
                <span class="material-symbols-outlined">
                                    delete
                                </span>
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                </div>
            </div>
            <div class="contrato">
                <div class="card_contrato">
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                contract
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                               Status do Contrato
                            </div>
                            <div class="info-texto">
                                Em aberto
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Nome do Cliente
                            </div>
                            <div class="info-texto">
                                Jorge Andre
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    check_circle
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Serviço Realizado
                            </div>
                            <div class="info-texto">
                                Babá
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                    calendar_month
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Data do Serviço
                            </div>
                            <div class="info-texto">
                                00/00/0000 - 00/00/0000
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                attach_money
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Valor
                            </div>
                            <div class="info-texto">
                                80,00
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    format_align_center
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Descrição
                            </div>
                            <div class="info-texto">
                                Serviço de babá para uma criança por um dia.
                            </div>
                        </div>
                    </div>
                    <div class="info">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                <span class="material-symbols-outlined">
                                    fact_check
                                </span>
                            </span>
                        </div>
                        <div class="texto">
                            <div class="info-titulo">
                                Número do Contrato
                            </div>
                            <div class="info-texto">
                                765-367
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="contrato-pdf">
                    <button class="btn-pdf">Gerar PDF</button>
                <span class="material-symbols-outlined">
                                    delete
                                </span>
                                <span class="material-symbols-outlined">
                                    edit
                                </span>
                </div>
            </div>
        </div>
        </div>
        <div id="dv-modal" class="modal">
            <div class="alert-modal">
                <div class="modal-header">
                    <h1><span class="material-symbols-outlined">
                            warning
                        </span></h1>
                </div>
                <div class="modal-body">
                    <h2>Tem certeza que deseja excluir esse contrato?</h2>

                </div>
                <div class="modal-footer">
                    <button onclick="" class="btn-modal">Sim</button>
                    <button class="btn-modal" onclick="closeModal('dv-modal')">Cancelar</button>
                </div>
            </div>
            </div>
        <div onclick="document.location='cad_servico.php'" class="btn-flutuante">
            <span class="material-symbols-outlined">
                add
            </span>
        </div>
    </main>
</body>
<footer class="footer">
    <div class="footer_left">
        <div class="footer__links">
            <a class="footer__link" href="https://www.instagram.com/inotech_ds/" target="__blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class=" bi-instagram"
                    viewBox="0 0 16 16">
                    <path
                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                </svg>
                @inotech_ds
            </a>
            <a class="footer__link" href="mailto:tccinotec@gmail.com" target="__blank">
                <span class="material-symbols-outlined"> mail </span>
                tccinotec@gmail.com
            </a>
        </div>
    </div>


    <div class="footer_center">
        <div onclick="document.location='home.php'" class="footer__image">

            <img src="logo/foxserv-branco.PNG" alt="FoxServ" class="footer_image">

            <div class="logo-header">
                <h1 class="logo"><a href="home.html"> Fox<span class="foxserv">Serv</span></a></h1>
            </div>
        </div>
        <div class="bottom">Criado por INOTECH </div>
        <div class="copyright_png"><span class="copyright">
                copyright </span>
            2023 Todos os direitos reservados</div>
    </div>
    </div>
    <div class="footer_right">
        <div class="footer__links_right">
            <a class="footer__link" href="mailto:tccinotec@gmail.com" target="__blank">
                <span class="material-symbols-outlined"> help </span>
                Precisa de Ajuda?
            </a>
        </div>
    </div>

</footer>

</html>