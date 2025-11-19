<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <script type="text/javascript" src="js/darkmode.js" defer></script>
    <script type="text/javascript" src="js/main.js" defer></script>
    <script type="text/javascript" src="js/controleFonte.js"></script>
    <title>HOME - Raízes da Saúde</title>
</head>
<body>

    <header class="d-flex justify-content-between align-items-center p-4">
        <h2 class="logo">Raízes da Saúde</h2>

        <nav class="navigation d-flex align-items-center">

          <ul class="nav nav-tabs me-4">
            <li class="nav-item">
              <a class="nav-link active home-menu" aria-current="page" href="home.php">Home</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Especialidades</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="quemsomos.php">Ginecologia e Obstetrícia</a></li>
                <li><a class="dropdown-item" href="quemsomos.php">Pediatria</a></li>
                <li><a class="dropdown-item" href="quemsomos.php">Cardiologista</a></li>
                <li><a class="dropdown-item" href="quemsomos.php">Ortopedista</a></li>
                <li><a class="dropdown-item" href="quemsomos.php">Dermatologista</a></li>
                <li><a class="dropdown-item" href="quemsomos.php">Psiquiatria</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item agenda-link" href="cadastro.php">Agende sua consulta</a></li>
              </ul>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Exames</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="quemsomos.php">Hemograma completo</a></li>
                <li><a class="dropdown-item" href="quemsomos.php">Ultrassom</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item agenda-link" href="cadastro.php">Agende sua consulta</a></li>
              </ul>
            </li> 
          
            <li class="nav-item">
              <a class="nav-link" href="sobrenos.php">Sobre Nós</a>
            </li>
          </ul>
          
          <button id="ModoEscuro" aria-label="Alternar Modo Escuro/Claro"><i class="bi bi-moon-fill"></i><i class="bi bi-brightness-high-fill"></i></button>
        </nav>

        <a id="login" href="login.php" class="btn btn-success">login</a>
          
    </header>

    <!--Botôes de aumentar e diminuir fonte-->
    <div class="font-buttons">
        <button class="button-alterFont" onclick="adjustFontSize(1)">A+</button>
        <button class="button-alterFont" onclick="adjustFontSize(-1)">A-</button>
    </div>

  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/banner1.png" class="d-block w-100" alt="Banner 1: Agende sua consulta">
      </div>
      <div class="carousel-item">
        <img src="img/banner2.png" class="d-block w-100" alt="Banner 2: Nossas especialidades">
      </div>
      <div class="carousel-item">
        <img src="img/banner3.png" class="d-block w-100" alt="Banner 3: Cuidados humanizados">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Próximo</span>
    </button>
  </div>

    <main class="texto-esquerda section-card">
        <h1>Bem-vindo à Raízes da Saúde</h1>
        <p>Na Raízes da Saúde, cuidamos de cada paciente com carinho, responsabilidade e respeito.
        Nossa missão é oferecer um cuidado humanizado e acessível, promovendo a saúde e o bem-estar de todos.
        Com consultas a partir de R$90,00, nosso atendimento é simples, eficiente e realizado por profissionais qualificados.</p>
        
        <p>Valorizamos a escuta, o acolhimento e a confiança, garantindo que cada pessoa se sinta segura e bem cuidada desde o primeiro contato.</p>
        
        <a href="contato.php" id="btn-Contato" class="btn btn-primary btn-contato">Nosso Contato</a>
    </main>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
