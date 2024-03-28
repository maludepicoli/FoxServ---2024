<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <link rel="icon" href="logo/lilas-2.PNG">
    <script src="modo_escuro.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Login</title>
</head>

<body>
    
    <div class="main_gradiente"> 
        <div class="main">
        <div class="left"> 
            <div class="logo-header">
                
                <h1 class="logo"><a href="index.php"> Fox<span class="foxserv">Serv</span></a></h1>
                <div class="modo_escuro">
                    <input type="checkbox" name="change-theme" id="change-theme" />
                    <label for="change-theme">
                      <i class="bi bi-sun"></i>
                      <i class="bi bi-moon"></i
                    ></label>
                  </div>
            </div>
            <form class="card-form" action="testelog.php" method="POST"> 
                <h1>Login</h1>
                <div class="linha">
                    <div class="textfield">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" placeholder="Insira seu e-mail" required maxlength="50">
                    </div>
                </div>
                <div class="linha">
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="insira sua senha" required maxlength="30" minlength="8">
                    </div>
                </div>
                 
                <div class="cadastro">
                    <a class="esqueceu_a_senha" href="esqueci_senha.php">Esqueceu a senha?</a>
                </div>
                <?php
                    if(isset($_GET["erro"])){
                        echo"Email ou senha incorreta!";
                    }
                ?>
                <div class="botao">
                  <input type="submit" name="submit" class="btn-login" id="submit" value="Entrar">
                </div>
                <div class="cadastro">
                    <label for="cadastro"> Ainda não tem um cadastro?</label>
                    <a class="cadastrar_se" href="cad_usuario.php">Cadastrar-se</a>
                </div>
                
            </form>
        </div>
        <div class="right"> 
            <img src="image/login-modoClaro.png"class="img-right-modoClaro"> 
            <img src="image/login-modoEscuro.png"class="img-right-modoEscuro">
        </div>
    </div>
</div>
</body>
</html>
