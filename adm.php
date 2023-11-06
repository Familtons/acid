<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <link rel="stylesheet" href="Acid.css">
    <link rel="shortcut icon" href="vdd.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acid - Projeto final de PW2</title>

</head>
<body> 

    <style>
/*botão do gerenciamento*/
  main.botao section.botao3 button {
  padding: 1rem 1.5rem;
  text-transform: uppercase;
  border-radius: 32px;
  border: 0;
  cursor: pointer;
  font-size: 80%;
  font-weight: 500;
  border-color: white;
  margin-bottom: 16px 0;
  margin-top: 3%;
  margin-left:10%;
  background-color:black;
  font-size:100%;
  font-family:Arial, Helvetica Neue, Helvetica, sans-serif;
  color: rgb(255, 255, 255);
}

/*botão do inserir*/
  main.botao section.botao1 button {
  padding: 1rem 1.5rem;
  text-transform: uppercase;
  border-radius: 32px;
  border: 0;
  cursor: pointer;
  font-size: 80%;
  font-weight: 500;
  border-color: white;
  margin-bottom: 16px 0;
  margin-top: 8%;
  margin-left:10%;
  background-color:black;
  font-size:100%;
  font-family:Arial, Helvetica Neue, Helvetica, sans-serif;
  color: rgb(255, 255, 255);
}

      
/*Corpo do site*/
            body{
    margin: 0;
    height: 100vh;
    width: 100vw;
    background: white;
    overflow-x: hidden;

}



/*Barra de navegação*/
* {
    margin: 0;
    padding: 0;
   }
  /*Escrita do entre ou cadastra-se*/
 a {
    color: #fff;
    text-decoration: none;
    transition: 0.3s;
  }
  
  a:hover {
    opacity: 0.7;
  }
  
  /*Retangulo preto barra de navegação*/
  nav {
    top: 0;
    display: flex;
    position: fixed;
    width: 100%;
    justify-content: space-around;
    align-items: center;
    background: black;
    height: 11vh;
  }
  
  

    </style>
    <!--Header-->

    <header>
        <nav>
            <!--Logo-->
          <a href="acid.php"class="logo"><img src="./icones/Meu projeto.png" width="170px" height="100x" alt=""></a>
                </a>
            </div>
    </header>
    
    <!--slider-->
    

      <!--fim do slider-->
      
      <main class="botao">
        <section class="botao1">
      <button><a href="inserirprodutopagina.php">Inserir produtos</a></button>
    </section>
    <section class="botao3">
      <button><a href="gerenciamento.php">Gerenciar produtos</a></button>
    </section>
    </main>
  
</body>
</html>