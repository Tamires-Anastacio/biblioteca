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
        include_once 'conexao.php';
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
    </thead>


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
                <a href='form_atualizar.php?id=".$livro['id']."' type='button' class='btn btn-primary'>Atualizar</a>
                <a href='#' type='button' class='btn btn-danger'>Apagar</a>  
            </div>
            <td>
            ";
            echo "</tr>";
        }
    ?>

    </tbody>
    </table>
    <a href="index.php" type="button" class="btn btn-primary">Voltar</button>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>