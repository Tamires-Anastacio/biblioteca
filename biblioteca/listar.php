    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Livros</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                background-color: #0eb38fff; 
                font-family: Arial, sans-serif;
                padding: 20px;
            }

            h2 {
                text-align: center;
                color: #e066daff; 
                margin-bottom: 30px;
            }

            .container {
                background: #6ff3cbff; 
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
            }

            table {
                text-align: center;
            }

            th {
                background-color: #2c3e50; 
                color: #f51010ff;
            }

            td {
                vertical-align: middle;
            }

            .btn-group a {
                border-radius: 8px;
                margin: 2px;
            }

            .btn-primary {
                background-color: #044133ff;
                border: none;
            }

            .btn-primary:hover {
                background-color: #1d618bff;
            }

            .btn-danger {
                background-color: #4a9af7ff;
                border: none;
            }

            .btn-danger:hover {
                background-color: #c0392b;
            }

            .btn-voltar {
                display: block;
                margin: 20px auto 0 auto;
                border-radius: 8px;
                width: 200px;
            }
        </style>
    </head>
    <body>
        <?php
            include_once 'pedaco.php';
            include_once 'conexao.php';
        ?>

        <h2>LISTA DE LIVROS DISPONÍVEIS</h2>
        <div class="container">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">TÍTULO DO LIVRO</th>
                        <th scope="col">GÊNERO</th>
                        <th scope="col">AUTOR</th>
                        <th scope="col">ANO</th>
                        <th scope="col">PÁGINAS</th>
                        <th scope="col">AÇÕES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM livros";
                        $stmt = $pdo->query($sql);
                        while ($livro = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo "<tr>";
                            echo "<th scope='row'>".$livro['id']."</th>";
                            echo "<td>".$livro['titulo']."</td>";
                            echo "<td>".$livro['genero']."</td>";
                            echo "<td>".$livro['autor']."</td>";
                            echo "<td>".$livro['ano']."</td>";
                            echo "<td>".$livro['paginas']."</td>";
                            echo "
                            <td>
                                <div class='btn-group' role='group'>
                                <a href='form_atualizar.php?id=".$livro['id']."' class='btn btn-primary'>Atualizar</a>
                                <a href='apagar.php?id=".$livro['id']."' class='btn btn-danger'>Apagar</a>  
                                </div>
                            </td>
                            ";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-primary btn-voltar">Voltar</a>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
