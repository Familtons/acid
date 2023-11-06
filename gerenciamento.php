<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>

    .info {
display: block;
flex-wrap: wrap;
justify-content: space-between;
}

.produtos {
    float:left;
  width: calc(25% - 5px); 
  margin-bottom: 100px;
  box-sizing: border-box;
  background: white;
  border-radius: 1%;
  padding: 60px;
  text-align: center;
  font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  border: 0.2px solid #ccc;
}
main.info section.produtos h3{
  color:#0c0b0b;
}
main.info section.produtos p{
  color:#0c0b0b;
}
main.info section.produtos:first-child {
  margin-left: 0; 
}

main.info section.produtos h3 {
  font-size: 16px;
  margin: 8px 0;
}

main.info section.produtos strong {
  font-size: 20px;
  margin: 8px 0;
}

main.info section.produtos span {
  font-weight: 300;
  font-size: 14px;
  margin-bottom: 8px;
  color: #7a7c20;
}
</style>
<?php
require_once('conexao.php');
$comando = "SELECT * FROM produto";
$registros = mysqli_query($conexao, $comando);
while ($linha = mysqli_fetch_assoc($registros)) {
  $destino = $linha['destino'];
?>  
<main class="info">
    <section class="produtos">
    <div class='icon'>
    <img src="<?= $destino ?>" width="200" height="150">
    </div>

    <p>Produto: <?= $linha['nome'] ?></p>
    <p>Preço: R$ <?= $linha['preco'] ?></p>
    <p>Descrição: <?= $linha['descricao'] ?></p>
    <p>
        <a href="deletar.php?idproduto=<?= $linha['idproduto'] ?>">
            Apagar produto
        </a>
        <a href="formeditar.php?idproduto=<?= $linha['idproduto'] ?>">
            Editar produto
        </a>
    </p>
    <br>
</section>
</main>

<?php
}
?>

    <a href="acid.php">Voltar para a pagina inicial</a>
</body>
</html>



