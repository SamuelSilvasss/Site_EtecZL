<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departamentos - Etec ZL</title>

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
        .departamento {
            margin-top: 30px;
            text-align: center;
        }
        .departamento h3 {
            color: #007bff;
        }
        .departamento p {
            margin-bottom: 5px;
        }
        .info-box {
            background-color: #333;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
        }
        .table {
            color: #fff;
            border-radius: 10px;
            background-color: #333;
        }
        .table th, .table td {
            border: none;
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
        <img src="images/note.png" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>DEPARTAMENTOS</h1>
            <p class="opacity-75">Informações gerais - Etec Zona Leste.</p>
            <a href="contato" class="btn btn-danger">ENTRE EM CONTATO CONOSCO</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Departamentos -->
  <div class="container departamento">
    <div class="row">
      <!-- Coordenador Novotec -->
      <div class="col-lg-4">
        <div class="info-box">
          <h3>Coordenador Novotec</h3>
          <p>Giovanna Littiere (Novotec Administração)</p>
          <p>Leandro (Novotec Logística)</p>
          <p>Marcelo Collado (Novotec DS)</p>
          <p>Cibelle Ferreria Francoso (Novotec RH)</p>
          <p>Jeferson Roberto de Lima (Novotec DS AMS)</p>
        </div>
      </div>
      <!-- Coordenador Curso Técnico -->
      <div class="col-lg-4">
        <div class="info-box">
          <h3>Coordenador Curso Técnico</h3>
          <p>Monyse Tesser Panacci (Técnico em Adm / Técnico em Contabilidade)</p>
          <p>Ediney Ciasi Barreto (Técnico em DS)</p>
          <p>Silvano Lack de Brito (Técnico em Log/ Técnico em Serviços Jurídicos)</p>
        </div>
      </div>
      <!-- Contato -->
      <div class="col-lg-4">
        <div class="info-box">
          <h3>Contato</h3>
          <p>Telefones: 
            (11) 2045-4018 | (11) 2045-4016 <br>(11) 2045-4011</p>
          <p>E-mail: e211dir@cps.sp.gov.br</p>
        </div>
      </div>
            <!-- Assessor Técnico Administrativo II -->
      <div class="col-lg-4">
        <div class="info-box">
          <h3>Assessor Técnico Administrativo II</h3>
          <p>Patrick Moreno da Silva</p>
        </div>
      </div>
      <!-- Diretor(a) da Etec -->
      <div class="col-lg-4">
        <div class="info-box">
          <h3>Diretor(a) da Etec</h3>
          <p>Amanda Bueno</p>
        </div>
      </div>

      <!-- Tabela de Horários de Atendimento -->
      <div class="col-lg-12">
        <div class="info-box">
          <h3>Horários de Atendimento</h3>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Segunda-Feira</th>
                <th>Quarta-Feira</th>
                <th>Sexta-Feira</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>08h00min. às 09h30min.</td>
                <td>08h00min. às 09h30min.</td>
                <td>08h00min. às 09h30min.</td>
              </tr>
              <tr>
                <td>14h30min. às 15h30min.</td>
                <td>14h30min. às 15h30min.</td>
                <td>14h30min. às 15h30min.</td>
              </tr>
              <tr>
                <td>19h30min. às 20h30min.</td>
                <td>19h30min. às 20h30min.</td>
                <td>19h30min. às 20h30min.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
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
