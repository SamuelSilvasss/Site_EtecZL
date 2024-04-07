<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vestibulinho - Etec Zona Leste</title>
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

        /* Defina o tamanho máximo para a imagem */
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
                    <img src="images/livro.png" class="d-block w-100" alt="...">
                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>VESTIBULINHO</h1>
                            <p class="opacity-75">O Vestibulhinho das Escolas Técnicas Estaduais<br>
                             Ocorrem de Forma Semestral <p>
                            <a href="https://www.vestibulinhoetec.com.br/home/" class="btn btn-danger">INSCREVA-SE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container marketing">

            <!-- Vestibulinho Section -->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-5">
                    <img src="images/prova.png" class="img-fluid" alt="Imagem do Vestibulinho">
                </div>
                <div class="col-md-7">
                    <h2 class="featurette-heading fw-normal lh-1">O Vestibulinho<br><br></h2>
                    <p class="lead">Contemplando os dois semestres do ano, o Vestibulinho é a porta de entrada para os cursos que se dividem em modalidades, sendo elas na ETEC Zona Leste: Ensino Técnico, Ensino Integrado Tradicional (M-Tec) e Articulação Médio-Técnica e Superior (AMS). É importante que os interessados à candidatura compreendam cada uma das modalidades, escolhendo a mais adequada à sua disponibilidade. Para a obtenção de um resultado positivo, o candidato deve se preparar para a prova com antecedência.</p>
                </div>
            </div>
            <h2><br><br>A Prova</h2>
                            <p class="lead"><br>A prova do Vestibulhinho tem duração de quatro horas. Os candidatos devem responder a 50 questões-teste, cada uma valendo um ponto, com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.
                              A prova prestada para as vagas remanescentes, as quais dão acesso direto ao segundo módulo do Ensino Técnico, é constituída de 30 questões-teste, também com cinco opções de respostas: A, B, C, D, E, das quais apenas uma é correta.

                              <h2><br>Informações Importantes sobre o exame do Vestibulinho ETEC</h2>
                            <p class="lead"><br>01 – A prova avalia conhecimentos nas principais matérias da Base Nacional Comum Curricular (BNCC) do Ensino Fundamental II, incluindo Linguagens (Língua Portuguesa), Matemática, Ciências Humanas (Geografia e História) e Ciências da Natureza;<br>
                                            <br>02 – As questões não são separadas por disciplinas, podendo ser multidisciplinares ou específicas;<br>
                                            <br>03 – Valores e ações que promovam uma sociedade mais humana, justa e sustentável são avaliados, exigindo atenção a temas atuais relacionados a esses tópicos;<br>
                                            <br>04 – As questões abordam competências como interpretação de diversos tipos de texto, aplicação de conhecimentos do Ensino Fundamental para resolver problemas, análise crítica de argumentos, reconhecimento de diferentes formas de linguagem e avaliação de ações de acordo com critérios estabelecidos.<br>

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
