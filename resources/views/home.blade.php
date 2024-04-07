<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Site Etec ZL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #000;
            color: #fff;
        }
        .navbar {
            background-color: #000 !important;
        }
        .nav-link {
            color: #fff !important;
        }
    </style>
</head>
<header data-bs-theme="dark">
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="images/logo3.png" width="140" height="80">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mx-auto mb-2 mb-md-0 nav-links align-items-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('inicio') }}">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('cursos') }}">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('instituicao') }}">Instituição</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('departamentos') }}">Departamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('oportunidades') }}">Oportunidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('vestibulinho') }}">Vestibulinho</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                    </form>
                </div>
            </div>
        </nav>
    </header>

<main>

  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/etec_mapa.png" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>ETEC ZONA LESTE</h1>
            <p class="opacity-75">Conheça a Etec Zona Leste: Excelência em Educação Técnica<br>
            na Região da Zona Leste de São Paulo.</p>
            <a href="instituicao" class="btn btn-danger">CONHEÇA A NOSSA HISTÓRIA</a>
          </div>
        </div>
      </div>
  </div>

<!-- Campo de pesquisa -->
<div class="container text-center mt-4">
        <form class="d-inline">
            <div class="input-group input-group-sm">
                <span class="input-group-text bg-black text-white" id="basic-addon1">O que está buscando?</span>
                <input type="text" class="form-control bg-black text-white" placeholder="" aria-label="" aria-describedby="basic-addon1">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Pesquisar</button>
            </div>
        </form>
    </div>
</main>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
    <title>Placeholder</title>
    <image xlink:href="images/ds.jpg" width="100%" height="100%" />
    </svg>
        <h2 class="fw-normal">Desenvolvimento de Sistemas</h2>
        <p>É o profissional que analisa e projeta sistemas. Constrói, documenta e realiza.</p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
    <title>Placeholder</title>
    <image xlink:href="images/lupa.png" width="100%" height="100%" />
    </svg>
        <h2 class="fw-normal">Administração</h2>
        <p>Como funcionam as organizações, desde empresas privadas até ONGs.</p>
        <p><br><br><br><a class="btn btn-danger" href="cursos">MAIS CURSOS</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
      <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
    <title>Placeholder</title>
    <image xlink:href="images/rh_logo.png" width="100%" height="100%" />
    </svg>
        <h2 class="fw-normal">Recursos Humanos</h2>
        <p>O estudante vai precisar de conhecimentos de língua portuguesa, matemática, etc...</p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Aprendizados para além da sala de aula.<br> <br> <span class="text-body-secondary"></span></h2>
        <p class="lead">Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
        <a href="oportunidades" class="btn btn-danger">CONHEÇA NOSSAS OPORTUNIDADES</a>
      </div>
      <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder:" preserveAspectRatio="xMidYMid slice" focusable="false">
    <title>Placeholder</title>
    <image xlink:href="images/goku.png" width="100%" height="100%" />
    <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
    </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading fw-normal lh-1">Descubra um futuro brilhante na ETEC Zona Leste.<br><br> <span class="text-body-secondary"></span></h2>
        <p class="lead">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
        <a href="cursos" class="btn btn-danger">CONHEÇA NOSSOS CURSOS</a>
      </div>
      <div class="col-md-5 order-md-1">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
    <title>Placeholder</title>
    <image xlink:href="images/mato_02.png" width="100%" height="100%" />
    <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
    </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Infraestrutura Moderna<br><br> <span class="text-body-secondary"></span></h2>
        <p class="lead">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
        <a href="instituicao" class="btn btn-danger">CONHEÇA NOSSA INFRAESTRUTURA</a>
      </div>
      <div class="col-md-5">
      <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
    <title>Placeholder</title>
    <image xlink:href="images/cadeiras.png" width="100%" height="100%" />
    <text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em"></text>
    </svg>
      </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->


  <!-- FOOTER -->
  <footer class="container">
    <div class="d-flex justify-content-between align-items-center">
        <p class="mb-0">&copy; 2024 Santos Sempre Santos.</p>
        <div class="d-flex">
            <a href="https://www.facebook.com/santosfc/?locale=pt_BR"><img src="images/facebook.png" alt="Facebook" width="40" height="40"></a>
            <a href="https://www.youtube.com/channel/UC0uRT_armQXqds_rjTjqJ0g"><img src="images/youtube.png" alt="YouTube" width="45" height="45"></a>
            <a href="https://www.instagram.com/santosfc/"><img src="images/insta.png" alt="Instagram" width="40" height="40"></a>
        </div>
    </div>
    <p class="float-end"><a href="#">Voltar ao topo</a></p>
</footer>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>