<?php
require_once('conexao.php');

$comando = "SELECT * FROM loja.produto order by idproduto desc ";
$resultado = mysqli_query($conexao,$comando);
$vitrine = "";
$count = 0;
while($linha = mysqli_fetch_array($resultado)){
    $count++;
    $idproduto = $linha['idproduto'];
    $vitrine .= "<section class='catalogo'>
                <a href='codespecificação.php?idproduto=".$idproduto."'>
                    <div class='icon'>
                    <img src=".$linha['destino'].">
                </div>
                <h3>".$linha['nome']."</h3>
                <p>".$linha['descricao']."</p>
                <br>
                <h3>R$".$linha['preco']."</h3>
                <br>
                </section></a>";

}
echo $vitrine;
?>
