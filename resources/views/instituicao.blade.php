<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instituição</title>
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

        /* Estilo para o mapa */
        #map {
            height: 400px;
            width: 100%;
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
                    <img src="images/escola.png" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>HISTÓRIA & INFRAESTRUTURA</h1>
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
                    <h2 class="featurette-heading fw-normal lh-1">Infraestrutura<br><br></h2>
                    <p class="lead">Uma característica notável da ETEC da Zona Leste é a oferta de cursos técnicos modulares e descentralizados, que proporcionam uma abordagem flexível e adaptável ao aprendizado. Adicionalmente, a escola disponibiliza diversos cursos gratuitos, ampliando o acesso à educação de qualidade.
                        Com uma estrutura tão completa e uma gama diversa de cursos, a ETEC da Zona Leste se destaca como uma instituição comprometida com o desenvolvimento educacional e profissional de seus alunos.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="images/infraestrutura.png" class="img-fluid" alt="Imagem Oportunidade 1">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- Featurette 2 -->
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">Nossa História<br><br></h2>
                    <p class="lead">Ao longo dos anos, a escola tem evoluído e se adaptado às demandas da sociedade e do mercado, ampliando sua oferta de cursos e modernizando suas instalações. Com uma equipe dedicada de professores e funcionários, a Etec Zona Leste oferece uma variedade de cursos técnicos em áreas como informática, administração, eletrônica, entre outros, proporcionando aos alunos uma formação sólida e atualizada.
                        Além da excelência acadêmica, a Etec Zona Leste também se destaca por suas atividades extracurriculares, que incluem projetos de pesquisa, competições acadêmicas, eventos culturais e esportivos.</p>
                </div>
                <div class="col-md-5">
                    <img src="images/gatos.png" class="img-fluid" alt="Imagem Oportunidade 2">
                </div>
            </div>

            <hr class="featurette-divider">

            <!-- Mapa da ETEC Zona Leste -->
            <div class="row">
                <div class="col-md-12">
                    <h2 class="featurette-heading fw-normal lh-1">Venha Conhecer Nossa Unidade</h2><br>
                    <!-- Mapa -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2589435852055!2d-46.47838692391547!3d-23.52318726019227!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1712488631880!5m2!1spt-BR!2sbr" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br><br><br><br>
                     <br>
            </div>

        </div>
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
