<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
require_once('conexao.php');
$idproduto = $_GET['idproduto'];
$comando = "SELECT * FROM produto WHERE idproduto= $idproduto";
$registros = mysqli_query($conexao, $comando);
    $linha = mysqli_fetch_assoc($registros)
?>
<main class="info">
    <section class="produtos">
    <p>Produto: <?= $linha['nome'] ?></p>
    <p>Preço: R$ <?= $linha['preco'] ?></p>
    <p>Descrição: <?= $linha['descricao'] ?></p>
    <p>
    <form action="editar.php?idproduto=<?= $linha['idproduto'] ?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="idproduto" value ="<?=$linha['idproduto']?>"> 
        <input name="arquivo" type="file" class="caixaT" placeholder="imagem" > 
    Nome:    <input type="text" name="nome" value ="<?=$linha['nome']?>">
    Descriçao:    <input type="text" name="descricao" value ="<?=$linha['descricao']?>">
    Preço:    <input type="text" name="preco" value ="<?=$linha['preco']?>"> 
    <button type="submit">Enviar</button> 
</section>
</main>  
</body>
</html>