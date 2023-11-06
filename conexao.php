<?php
$conexao = mysqli_connect("localhost","root","","loja");

if($conexao == false){
echo mysqli_connect_error();
}
?>