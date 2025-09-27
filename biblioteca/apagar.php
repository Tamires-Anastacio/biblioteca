    <?php
        require 'conexao.php';
        $id = 1;
        $sql = "DELETE FROM livros WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        if ($stmt->execute()) {
        echo "Livro excluído com sucesso!";
        } else {
        echo "Erro ao excluir livro.";
        }
    ?>