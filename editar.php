<?php
require_once('conexao.php');

$idproduto=$_POST['idproduto'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco= $_POST['preco'];
$destino = 'imagens/'. $_FILES['arquivo']['name'];
$arquivo_tmp = $_FILES['arquivo']['tmp_name'];

move_uploaded_file( $arquivo_tmp, $destino );
$comando = "UPDATE produto SET destino= '$destino', nome ='$nome', descricao = '$descricao', preco = '$preco'
            WHERE idproduto = $idproduto";

$rodou = mysqli_query($conexao, $comando);

if($rodou){
    echo" Produto alterado com sucesso";
}else{
    echo "não deu";
}
    echo '<a href="gerenciamento.php">Voltar para a pagina</a>';
?>  