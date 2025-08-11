<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <?php
        include_once 'pedaco.php';
    ?>

    <h2>LISTA DE LIVROS DISPONÍVEIS</h2>
    <div class="container">
    <table class="table">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">TÍTULO DO LIVRO</th>
            <th scope="col">GENERO</th>
            <th scope="col">AUTOR</th>
            <th scope="col">ANO</th>
            <th scope="col">PÁGINAS</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>DOM CASMURRO</td>
            <td>ROMANCE</td>
            <td>MACHADO DE ASSIS</td>
            <td>1900</td>
            <td>338</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>DOM CASMURRO</td>
            <td>ROMANCE</td>
            <td>MACHADO DE ASSIS</td>
            <td>1900</td>
            <td>338</td>
        </tr>
        <tr>
            <th scope="row">3</th>
                <td>DOM CASMURRO</td>
                <td>ROMANCE</td>
                <td>MACHADO DE ASSIS</td>
                <td>1900</td>
                <td>338</td>
        </tr>
    </tbody>
    </table>
    <a href="index.php" type="button" class="btn btn-primary">Voltar</button>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>