<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualização de Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f0f8f5; 
            font-family: Arial, sans-serif;
            padding: 30px;
        }
        .container {
            background: #ffffff;
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

    </style>
</head>


<?php
    require 'conexao.php';
    $id = $_GET['id'];
    $novo_titulo = $_POST['novo_titulo'];
    $novo_autor = $_POST['novo_autor'];
    $novo_genero = $_POST['novo_genero'];
    $novo_ano = $_POST['novo_ano'];
    $novo_paginas = $_POST['novo_paginas'];


    $sql = "UPDATE livros 
    
    SET titulo = :novo_titulo,
        autor = :novo_autor,
        genero = :novo_genero,
        ano = :novo_ano,
        paginas = :novo_paginas
    
    WHERE id = :id";


    $stmt = $pdo->prepare($sql);



    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':novo_titulo', $novo_titulo);
    $stmt->bindParam(':novo_autor', $novo_autor);
    $stmt->bindParam(':novo_genero', $novo_genero);
    $stmt->bindParam(':novo_ano', $novo_ano);
    $stmt->bindParam(':novo_paginas', $novo_paginas);


    if ($stmt->execute()) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar livro.";
    }
?>