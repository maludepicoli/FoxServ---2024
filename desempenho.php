<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi+2&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="desempenho.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="icon" href="logo/lilas-2.PNG">
    <script src="modo_escuro.js" defer></script>
    <script src="faq.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <title>Meu Desempenho</title>
</head>

<body>
    <!-- cabeçalho -->
    <nav class="nav">
      <div class="container">
          <div class="logo-header">
              <img src="logo/foxserv-branco.PNG" class="img_logo">
              <h1 class="logo"><a class="logo" href="home.php"> Fox<span class="foxserv">Serv</span></a></h1>
          </div>


          <ul>
              <div class="dropdown">
                  <ul>

                      <div class="menu"><img class="foto_menu" src="image/foto_instagram.jpg"> Olá, Profissional <span
                              class="material-symbols-outlined">
                              expand_more
                          </span> </div>
                      <div class="dropdown-content">
                          <ul>
                              <li onclick="document.location='FeedProf.html'"><img class="foto_menu"
                                      src="image/foto_instagram.jpg">Meu
                                  Perfil</li>

                              <li onclick="document.location='homeProf.php'"><span
                                      class="material-symbols-outlined">
                                      home
                                  </span>Home</li>
                              <li onclick="document.location='contratos.php'"><span
                                      class="material-symbols-outlined">
                                      description
                                  </span>Meus Contratos</li>
                              <li><span class="material-symbols-outlined">
                                      notifications
                                  </span>Notificações
                                  <ul>
                                      <li><span class="material-symbols-outlined">
                                              favorite
                                          </span> Curtiu sua Publicação </li>
                                      <hr>
                                      <li> <span class="material-symbols-outlined">
                                              star
                                          </span>Avaliou seu serviço </li>
                                      <hr>
                                      <li><span class="material-symbols-outlined">
                                              favorite
                                          </span> Curtiu sua Publicação </li>
                                      <hr>
                                      <li> <span class="material-symbols-outlined">
                                              star
                                          </span>Avaliou seu serviço </li>
                                      <hr>
                                      <li><span class="material-symbols-outlined">
                                              favorite
                                          </span> Curtiu sua Publicação </li>
                                      <hr>
                                      <li> <span class="material-symbols-outlined">
                                              star
                                          </span>Avaliou seu serviço </li>
                                      


                                  </ul>
                              </li>
                              <li class="sair"><span class="material-symbols-outlined">
                                      logout
                                  </span>Sair</li>
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
  </nav>

  <head>
 
 



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["meses", "média", { role: "style" } ],
        ["janeiro", 4, '#00ff88'],
          ["fevereiro", 3, '#7c6f9e'],
          ["março", 4, ' #7c6f9e'],
          ["abril", 5, '#7c6f9e'],
          ['junho', 3, '#7c6f9e']
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Seu desempenho de acordo com nossos clientes",
        width: 600,
        height: 400,
        bar: {groupWidth: "80%"},
        legend: { position: "none" },
        background: "#00ff88",
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="columnchart_values" class="columnchart_values" style="width: 900px; height: 300px;"></div>


  </body>
</html>