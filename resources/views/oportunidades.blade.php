<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oportunidades - Etec Zona Leste</title>
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

        /* Defina o tamanho máximo para as imagens */
        .featurette img {
            max-width: 500px;
            height: auto;
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

    <main>

        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/aranha.png" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>OPORTUNIDADES</h1>
                            <p class="opacity-75">Oportunidades de emprego incríveis aguardam<br>
                             por você. Encontre sua trajetória de sucesso hoje!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container marketing">

            <!-- Featurette 1 -->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Concurso Público<br><br></h2>
                    <p class="lead">Estão em andamento concursos públicos para contratação de 2,7 mil docentes e servidores administrativos para atuar em Escolas Técnicas (Etecs), Faculdades de Tecnologia (Fatecs) do Estado e na Administração Central do Centro Paula Souza (CPS). Os certames foram autorizados em junho de 2022 e as admissões ocorrem em 2023. O calendário do concurso para os cargos administrativos e os editais para docentes, que são liberados em lotes, estão disponíveis nos links abaixo.</p>
                    <a href="https://www.cps.sp.gov.br/concursopublico/" class="btn btn-danger">SAIBA MAIS</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="images/lapis.png" class="img-fluid" alt="Imagem Oportunidade 1">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- Featurette 2 -->
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Processo Seletivo Simplificado para Auxiliar de Docente<br><br></h2>
                    <p class="lead">Prepare-se para embarcar em uma jornada de ensino e aprendizado! O Processo Seletivo Simplificado para Auxiliar de Docente nas renomadas Escolas Técnicas Estaduais (ETECs) ou Faculdades de Tecnologia (FATECs) está com inscrições abertas.
                    Participe deste processo seletivo e compartilhe seu conhecimento, experiência e paixão pelo ensino. As inscrições estão disponíveis para aqueles que desejam desempenhar um papel fundamental na educação técnica do Estado de São Paulo.</p>
                    <a href="https://urhsistemas.cps.sp.gov.br/dgsdad/SelecaoPublica/PSSAD/Abertos.aspx" class="btn btn-danger">INSCREVA-SE</a>
                </div>
                <div class="col-md-5">
                    <img src="images/predios.png" class="img-fluid" alt="Imagem Oportunidade 2">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- Featurette 3 -->
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading fw-normal lh-1">Programa Aprendiz Paulista<br><br></h2>
                    <p class="lead">sua chance de ingressar no mercado de trabalho! Se você tem entre 14 e 24 anos, está matriculado em cursos técnicos profissionalizantes do Centro Estadual de Educação Tecnológica Paula Souza e reside em São Paulo, esta é a sua chance de conquistar uma vaga de aprendizagem em empresas parceiras.
                    Benefícios incluem salário mínimo por hora, vale transporte, férias remuneradas, FGTS e registro em carteira. Esteja preparado para uma jornada de aprendizado prático e teórico. Junte-se a nós e construa o seu futuro!</p>
                    <a href="https://jovemaprendiz.sp.gov.br/" class="btn btn-danger">SAIBA MAIS</a>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="images/jovem_aprendiz.png" class="img-fluid" alt="Imagem Oportunidade 3">
                </div>
            </div>

            <hr class="featurette-divider">
        </div><!-- /.container -->

    </main>

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
    <p class="float-end"><a href="#">Volte para o topo</a></p>
</footer>
    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
