<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
    body {
        background-color: #7cb9a3ff; 
        font-family: Arial, sans-serif;
        padding: 30px;
    }

    h2 {
        text-align: center;
        color: #a9f3e1ff; 
        margin-bottom: 30px;
        font-weight: bold;
    }

    .container {
        background: #c2eca6ff;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        max-width: 600px;
        margin: auto;
    }

    input.form-control {
        border-radius: 8px;
        border: 1px solid #ccc;
        padding: 12px;
        transition: 0.3s;
    }

    input.form-control:focus {
        border-color: #2e8b57;
        box-shadow: 0 0 6px rgba(46, 139, 87, 0.5);
    }

    button.btn-primary {
        background-color: #2e8b57;
        border: none;
        border-radius: 8px;
        padding: 12px 20px;
        width: 100%;
        font-size: 16px;
        font-weight: bold;
        transition: 0.3s;
    }

    button.btn-primary:hover {
        background-color: #246b45;
    }

    a.btn-danger {
        display: block;
        text-align: center;
        margin-top: 15px;
        border-radius: 8px;
        background-color: #90ee90; 
        color: #000;
        font-weight: bold;
        border: none;
        transition: 0.3s;
    }

    a.btn-danger:hover {
        background-color: #76c776;
        color: #000;
    }
</style>

</head>
<body>
    <?php
        include_once 'pedaco.php';
    ?>
    <h2>Formulário para cadastro de livro</h2>
    <div class="container">
        <form action="inserir.php" method="POST">
        <div class="mb-3">
            <input placeholder="Digite o título do livro" type="text" name="titulo" class="form-control">
        </div>

        <div class="mb-3">
            <input placeholder="Digite o genero do livro" type="text" name="genero" class="form-control">
        </div>
       
        <div class="mb-3">
            <input placeholder="Digite o autor do livro" type="text" name="autor" class="form-control">
        </div>
       
        <div class="mb-3">
            <input placeholder="Digite o ano do livro" type="text" name="ano" class="form-control">
        </div>
        
        <div class="mb-3">
            <input placeholder="Digite a quantidade de páginas do livro" type="text" name="paginas" class="form-control">
        </div>
       
        <button type="submit" class="btn btn-primary">CADASTRAR LIVRO</button>
        </form>
        <a class="btn btn-danger"href="index.php" type="button" class="btn btn-primary">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>