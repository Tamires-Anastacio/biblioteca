<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca ETEC MCM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <h1>BIBLIOTECA</h1>
     <style>
        body {
            background-color: #32CD32;
            text-align: center;
            padding-top:90px;
        }
        .btn-group a {
            font-size: 18px;
            padding: 15px 30px;
            border-radius: 10px;
            margin: 10px;
        }
        .title {
            color: #BDB76B;
        }
        .btn-danger {
            color: #FFDEAD;
        }

        .btn-warning {
            color: #FFDEAD
        }
        h1 {
            color: #4B0082;
        }
    </style>
</head>

<body>
    <?php
        include_once 'pedaco.php';
    ?>
    <img src="imagens/alice.jpeg" width = "300">
    <nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Biblioteca ETEC MCM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Alternar navegação">
        <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Início</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="listar.php">Lista de Livros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="form_cadastro.php">Cadastrar Livro</a>
            </li>
            </ul>
        </div>
        </div>
  </nav>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>