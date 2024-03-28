<?php 
 include_once('config.php');
 session_start();
 
$email = $_SESSION['email'];

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true) and (!isset($_SESSION['tipo']) == "comum")){
    header('Location: login.php');
    exit(); 
}

?>




<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="logo/lilas-2.PNG">
    <script src="modo_escuro.js" defer></script>
    <script src="faq.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Home</title>
</head>

<body>
    <!-- cabeçalho -->
          <nav class="nav">
        <div class="container">
            <div class="logo-header">
                <img src="logo/foxserv-branco.PNG" class="img_logo">
                <h1 class="logo"><a class="logo" href="home.php"> Fox<span class="foxserv">Serv</span></a></h1>
            </div>
            <?php
            $sql = "SELECT nome, fotoPerfil FROM usuario WHERE email = '$email'";
             if($resultado=mysqli_query($conexao, $sql)){
                $nome = array(); 
                $fotoPerfil = array();
                $i = 0;

                while ($registro=mysqli_fetch_assoc($resultado)) {
                    $nome[$i] = $registro['nome'];
                    $fotoPerfil[$i] = $registro['fotoPerfil'];
            ?>
           
            <ul>
                <a href="telaEstatica.html"><span class="material-symbols-outlined">
                            group
                            </span> Seja um profissional</a>
                            
                <div class="dropdown">

                
                <button class="menu"><img class="foto_menu" src="upload/<?php echo $fotoPerfil[$i]; ?>"> Olá, <?php echo $nome[$i]; ?> <span
                        class="material-symbols-outlined">
                        expand_more
                    </span> </button>
                    <div class="dropdown-content">
                        <a href="home.php"><span class="material-symbols-outlined">
                            home
                            </span>Home</a>
                        <a href="contrato_cliente.php"><span class="material-symbols-outlined">
                            description
                            </span>Serviços Contratados</a>
                            <a href="editarCliente.php"><span class="material-symbols-outlined">
                                edit
                                </span>Editar Dados</a>
                        
                            <a class="sair" href="sair.php"><span class="material-symbols-outlined">
                                logout
                            </span>Sair</a>
                      </div>
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

        <div class="inicio">
            <div class="inicio-left">
                <h1 class="frase"> Os melhores serviços pelos</br> melhores preços </h1>
                <p>Te conectamos com profissionais <br> qualificados e confiaveis</p>
                <div class="pesquisa">
                    <input type="text" placeholder="Buscar serviço...">
                    <button><span class="material-symbols-outlined">
                            search
                        </span></button>
                </div>
            </div>
            <div class="inicio-right">
                <img class="animated" id="img-right-modoClaro" src="image/home-modoClaro.svg">
            <img class="animated" id="img-right-modoEscuro" src="image/home-modoEscuro.svg">
            </div>
        </div>
<script type='text/javascript'>document.addEventListener('DOMContentLoaded', function () {window.setTimeout(document.querySelector('svg').classList.add('animated'),1000);})</script>
        <div class="servicos">
            <div class="categorias">
                <h2>Nossos serviços</h2>
                <div class="cards">
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/familia-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/familia-modoEscuro.png">
                        </div>
                        <h3>Família</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=1"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/educacao-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/educacao-modoEscuro.png">
                        </div>
                        <h3>Educação</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=2"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/tecnologia-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/tecnologia-modoEscuro.png">
                        </div>
                        <h3>Tecnologia</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=3"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/reparos-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/reparos-modoEscuro.png">
                        </div>
                        <h3>Reparos</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=4"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/assTec-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/assTec-modoEscuro.png">
                        </div>
                        <h3>Ass. Técnica</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=5"> Acessar </a> <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/moda-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/moda-modoEscuro.png">
                        </div>
                        <h3>Moda</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=6"> Acessar </a> <span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/saude-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/saude-modoEscuro.png">
                        </div>
                        <h3>Saúde</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=7"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/artesanato-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/artesanato-modoEscuro.png">
                        </div>
                        <h3>Artesanato</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=8"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/beleza-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/beleza-modoEscuro.png">
                        </div>
                        <h3>Beleza</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=9"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                    <div class="card">
                        <div class="icon">
                            <img class="img_icon-modoClaro " src="image/eventos-modoClaro.png">
                            <img class="img_icon-modoEscuro " src="image/eventos-modoEscuro.png">
                        </div>
                        <h3>Eventos</h3>
                        <div class="acessar">
                            <a href="servicos.php?tipoServico=10"> Acessar </a><span class="material-symbols-outlined">
                                arrow_forward
                            </span>
                        </div>
                    </div>
                </div>
                <form class="sugestao" action="home.php" method="POST" enctype="multipart/form-data">
                    <p>Não encontrou o serviço que está procurando?</p>
                    <input type="text" class="sugestao" id="sugestao" name="sugestao" placeholder="Deixe aqui a sua sugestão...">
                    <input type="submit" class="submit" name="submit" value=">"></input>
                </form>
            </div>
           
           <?php
            
            if (isset($_POST['submit'])) {
                    
                    $sugestao = $_POST['sugestao'];
            
                    $result_sugestao = mysqli_query($conexao,"INSERT INTO sugestao(sugestao) 
                           VALUES ('$sugestao')");
            
            }
            ?>
        </div>
        <div class="avaliacoes">
            <h2>O que estão falando sobre nossos profissionais:</h2>
            <div class="avaliacao">
                <div class="left-img">
                    <img src="image/comentarios-modoClaro.png" class="img-avaliacao-modoClaro">
                    <img src="image/comentario-modoEscuro.png" class="img-avaliacao-ModoEscuro">
                </div>
                <div class="right-av">
                                       <div class="cards">
                        <div class="card-av">
                            <div class="av-header">
                                <div class="header-img">
                                    <img src="upload/PedroSilva.jpg" class="image-header">
                                </div>
                                <div class="header-info">
                                    <h4>Pedro Silva</h4>
                                    <p>12/08/2023</p>
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
                                <p>O profissional foi excelente no atendimento, o serviço que me prestou ficou impecavel, estou muito feliz com o resultado!</p>
                            </div>
                        </div>
                        <div class="card-av">
                            <div class="av-header">
                                <div class="header-img">
                                    <img src="upload/JuliaGabriele.jpg" class="image-header">
                                </div>
                                <div class="header-info">
                                    <h4>Julia Gabriele</h4>
                                    <p>29/10/2023</p>
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
                                <p>Adorei o serviço que contratei, a plataforma me ajudou a encontrar uma profissional excelente!</p>
                            </div>
                        </div>
                        <div class="card-av">
                            <div class="av-header">
                                <div class="header-img">
                                    <img src="upload/LucasAlmeida.jpg" class="image-header">
                                </div>
                                <div class="header-info">
                                    <h4>Lucas Almeida</h4>
                                    <p>17/10/2023</p>
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
                                <p>O profissional fez um trabalho excepcional, superando minhas expectativas. Recomendo a todos!</p>
                            </div>
                        </div>
                        <div class="card-av">
                            <div class="av-header">
                                <div class="header-img">
                                    <img src="upload/CamilaSouza.jpg" class="image-header">
                                </div>
                                <div class="header-info">
                                    <h4>Camila Souza</h4>
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
                                <p>Estou muito satisfeito com o profissional contratado e o serviço prestado e definitivamente usarei a plataforma novamente.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="faq">
            <div class="faq-card">
                <h3> Perguntas Frequentes (FAQ)</h3>
                <div class="perguntas">
                    <div class="pergunta-resposta">
                        <div class="pergunta">
                            <p>Qualquer um pode se tornar profissional?</p>
                            <span class="material-symbols-outlined">
                                add
                            </span>
                        </div>
                        <div class="resposta">
                            <p>Sim, a partir de 15 anos, qualquer um pode se tornar profissional na plataforma.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="pergunta-resposta">
                        <div class="pergunta">
                            <p>Como posso entrar em contato com o profissional?</p>
                            <span class="material-symbols-outlined">
                                add
                            </span>
                        </div>
                        <div class="resposta">
                            <p>Através do perfil do profissional, você tem acesso aos meios de contato (Sendo eles, telefone e whatsapp).</p>
                        </div>
                    </div>
                    <hr>
                    <div class="pergunta-resposta">
                        <div class="pergunta">
                            <p>É possivel realizar contratos dentro da plataforma?</p>
                            <span class="material-symbols-outlined">
                                add
                            </span>
                        </div>
                        <div class="resposta">
                            <p>Apesar de todas as informações serem acordadas fora da plataforma (data, valores, local, etc.) é possivel sim gerar um contrato pela plataforma preenchendo essas informações.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="pergunta-resposta">
                        <div class="pergunta">
                            <p>Como posso avaliar o profissional?</p>
                            <span class="material-symbols-outlined">
                                add
                            </span>
                        </div>
                        <div class="resposta">
                            <p>A avaliação é realizada a partir do seu contrato com o profissional, basta acessar a aba "<a class="link_resposta" href="contrato_cliente.php">Meus Serviços Contratados</a>" e escolher o serviço que deseja avaliar.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="pergunta-resposta">
                        <div class="pergunta">
                            <p>Quais são as formas de pagamento?</p>
                            <span class="material-symbols-outlined">
                                add
                            </span>
                        </div>
                        <div class="resposta">
                            <p>O pagamento será decidido e realizado diretamente com o profissional fora da plataforma. A foxServ não se responsabiliza pelos pagamentos!</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>


    </main>
   

</body>
<!-- rodapé -->
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
                <h1 class="logo"><a href="home.php"> Fox<span class="foxserv">Serv</span></a></h1>
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