<?php
require_once('conexao.php');
$idproduto = $_GET['idproduto'];
    
$comando = "DELETE FROM produto WHERE idproduto = $idproduto";
    if (mysqli_query($conexao, $comando)) {
        echo "Produto excluído com sucesso.";
    } else {
        echo "Erro ao excluir o produto: " . mysqli_error($conexao);
    }
        echo '<a href="gerenciamento.php">Voltar para a pagina</a>';
    ?>
