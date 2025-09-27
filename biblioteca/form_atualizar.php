<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body {
            background-color: #5aebb6ff; 
            font-family: Arial, sans-serif;
            padding: 30px;
        }

        .container {
            background: #b6eb9eff;
            max-width: 600px;
            margin: 50px auto;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }

        h2 {
            color: #2e8b57;
            margin-bottom: 30px;
        }

        .msg-sucesso {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .msg-erro {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .btn-voltar {
            display: inline-block;
            margin-top: 15pxpx;
            padding: 10px 20px;
            border-radius: 13px;
            background-color: #3eee3eff;
            color: #000;
            font-weight: bold;
            text-decoration: none;
        }


        .btn-atualizar {
            display: block;
            margin: 20px auto 10px auto;
            padding: 12px 25px;
            border-radius: 8px;
            background-color: #72a84eff;
            color: #461515ff;
            font-weight: bold;
            border: none;
            transition: 0.3s;
        }
    </style>
</head>
<body>
    <?php
        include_once 'pedaco.php';
        $id = $_GET['id'];

        echo "Valor do ID:" . $id;

        include_once 'conexao.php';


    ?>
    <h2>Formulário para atualização de livro</h2>

    <div class="container">
        <form action="atualizar.php?id=<?php ECHO $id; ?>" method = POST>

    <?php

    require 'conexao.php';
    $sql = "SELECT * FROM livros WHERE id = $id";
    $stmt = $pdo->query($sql);
    $livros = $stmt->fetch(PDO::FETCH_ASSOC);

    // while ($livros = $stmt->fetch(PDO::FETCH_ASSOC)) {


    //     echo "Título: " . $livros['titulo'] . "<br>";
    //     echo "Genero: " . $livros['genero'] . "<br>";
    //     echo "Autor: " . $livros['autor'] . "<br>";
    //     echo "Ano: " . $livros['ano'] . "<br>";
    //     echo "Paginas: " . $livros['paginas'] . "<br><br>";
    // }
    ?>

        <form action="inserir.php" method="POST">
        <div class="mb-3">
            Título: <input type="text" name="novo_titulo" value="<?php echo $livros['titulo'];?>" class="form-control">
        </div>

        <div class="mb-3">
            Genero: <input type="text" name="novo_genero" value="<?php echo $livros['genero'];?>" class="form-control">
        </div>
       
        <div class="mb-3">
            Autor: <input type="text" name="novo_autor" value="<?php echo $livros['autor'];?>" class="form-control">
        </div>
       
        <div class="mb-3">
            Ano: <input type="text" name="novo_ano" value="<?php echo $livros['ano'];?>" class="form-control">
        </div>
        
        <div class="mb-3">
            Páginas: <input type="text" name="novo_paginas" value="<?php echo $livros['paginas'];?>" class="form-control">
        </div>
       
        <button type="submit" class="btn btn-atualizar">ATUALIZAR LIVRO</button>
        </form>
        <a class="btn btn-voltar"href="index.php" type="button" class="btn btn-primary">Voltar</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>