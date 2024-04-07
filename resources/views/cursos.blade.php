<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos - Etec ZL</title>

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
        .curso {
            margin-top: 20px;
        }
        .rounded-circle {
            display: block;
            margin: 0 auto;
        }
    </style>
</head>
<body>

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
        <img src="images/cursos.png" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Nossos Cursos.</h1>
            <p class="opacity-75">Oferecemos cursos técnicos de alta qualidade.</p>
            <a href="https://www.vestibulinhoetec.com.br/unidades-cursos/" class="btn btn-danger">SAIBA MAIS</a>
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

  <div class="container">
    <h2 class="text-center mb-5">Cursos Oferecidos</h2>

    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <image xlink:href="images/financas.png" width="100%" height="100%" />
        </svg>
        <h2 class="fw-normal text-center">Contabilidade</h2>
        <p class="d-flex justify-content-center"><a class="btn btn-secondary" href="https://www.eteczonaleste.com.br/cursos/contabilidade/">Mais informações &raquo;</a></p><br>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <image xlink:href="images/lupa.png" width="100%" height="100%" />
        </svg>
        <h2 class="fw-normal text-center">Administração</h2>
        <p class="d-flex justify-content-center"><a class="btn btn-secondary" href="https://www.eteczonaleste.com.br/cursos/administracao/">Mais informações &raquo;</a></p><br>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <image xlink:href="images/rh_logo.png" width="100%" height="100%" />
        </svg>
        <h2 class="fw-normal text-center">Recursos Humanos</h2>
        <p class="d-flex justify-content-center"><a class="btn btn-secondary" href="https://www.eteczonaleste.com.br/cursos/recursos-humanos/">Mais informações &raquo;</a></p><br>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <image xlink:href="images/ds.jpg" width="100%" height="100%" />
        </svg>
        <h2 class="fw-normal text-center">Desenvolvimento de Sistemas</h2>
        <p class="d-flex justify-content-center"><a class="btn btn-secondary" href="https://www.eteczonaleste.com.br/cursos/desenvolvimento-de-sistemas/">Mais informações &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <image xlink:href="images/logistica.png" width="100%" height="100%" />
        </svg>
        <h2 class="fw-normal text-center">Logística</h2>
        <p class="d-flex justify-content-center"><a class="btn btn-secondary" href="https://www.eteczonaleste.com.br/cursos/logistica/">Mais informações &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder" preserveAspectRatio="xMidYMid slice" focusable="false">
          <title>Placeholder</title>
          <image xlink:href="images/juridico.png" width="100%" height="100%" />
        </svg>
        <h2 class="fw-normal text-center">Serviços Juridicos</h2>
        <p class="d-flex justify-content-center"><a class="btn btn-secondary" href="https://www.eteczonaleste.com.br/cursos/servicos-juridicos/">Mais informações &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->
  </div><!-- /.container -->

</main>

<!-- FOOTER -->
<br><footer class="container">
    <br><div class="d-flex justify-content-between align-items-center">
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