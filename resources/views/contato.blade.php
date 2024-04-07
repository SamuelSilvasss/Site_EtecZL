<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato - Etec ZL</title>

    <!-- CSS Bootstrap e Estilos Personalizados -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <!-- Estilos Personalizados Adicionais -->
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
        .contact-form {
            margin-top: 30px;
            text-align: center;
        }
        .contact-form input[type="text"],
        .contact-form input[type="email"],
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #666;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }
        .contact-form textarea {
            height: 200px;
        }
        .contact-form input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .contact-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<!-- Cabeçalho -->
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

  <!-- Imagem Principal -->
  <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/contato.png" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Nosso Contato</h1>
            <p class="opacity-75">Está com alguma dúvida? mande para nós!<br></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Formulário de Contato -->
  <div class="container contact-form">
    <h2 class="text-center mb-5">Entre em Contato</h2>
    <form action="#" method="post">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <input type="text" name="nome" placeholder="Nome" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <input type="email" name="email" placeholder="Email" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <input type="text" name="assunto" placeholder="Assunto" required>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <textarea name="mensagem" placeholder="Digite sua mensagem..." required></textarea>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mx-auto">
          <input type="submit" value="Enviar">
        </div>
      </div>
    </form>
  </div>

</main>

<!-- Rodapé -->
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

<!-- Scripts Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
