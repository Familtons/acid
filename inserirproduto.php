<?php
require_once('conexao.php');
    
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco= $_POST['preco'];
    $destino = 'imagens/'. $_FILES['arquivo']['name'];
    $arquivo_tmp = $_FILES['arquivo']['tmp_name'];

      move_uploaded_file( $arquivo_tmp, $destino );

    $comando = "INSERT INTO loja.produto(nome, descricao, preco, destino) VALUES ('$nome', '$descricao', '$preco', '$destino')";
    $resultado = mysqli_query($conexao,$comando);
    
    if($resultado == true){
        echo "Adicionado com sucesso";
      }
      echo '<br><a href="acid.php">Voltar ao menu</a>'
?>