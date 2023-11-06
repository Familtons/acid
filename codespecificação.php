<?php
require_once('conexao.php');


    $idproduto = $_GET['idproduto'];
    $comando = "SELECT * FROM loja.produto WHERE idproduto = $idproduto";
    $resultado = mysqli_query($conexao, $comando);
    
    if ($linha = mysqli_fetch_array($resultado)) {
        $nome = $linha['nome'];
        $descricao = $linha['descricao'];
        $preco = $linha['preco'];
        $destino = $linha['destino'];
    } 
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <link rel="shortcut icon" href="vdd.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tenis</title>

</head>

<body> 
    
    <!--Header-->

    <header>
        <nav>
            <!--Logo-->
          <a class="logo"><a href="acid.php"><img src="./icones/Meu projeto.png" width="170px" height="100px" alt=""></a>
          <!--Barra de pesquisa-->
            <div class="search-box">
                <input type="text" class="search-text" placeholder="O que está procurando?">
                <a class="search-btn">
                    <img class="loup" src="./loup.svg" alt="" width="25px" height="25px">
                    <img class="loup2" src="./loup2.svg" alt="" width="25px" height="25px">
    
                </a>
            </div>
        <!--Icones do Header-->
            <div class="headerletra">
            <ul class="nav-list">
                <li><a href="#"><img src="./icones/user.png" width="25px" height="25px" alt=""> <span> Entre ou cadastre-se</span> </a></li>
            <div class="heart">
                <li><a href="#"><img src="./icones/heart.png" width="25px" height="25px" alt=""></a></li>
            </div>
                <li><a href="/"><img src="./icones/shopping-cart.png" width="25px" height="25px" alt=""></a></li>
            </ul>
            </div>
        </nav>
    </header>
            
    <!--slider-->
    <div class="slider">
        <div class="slider-nav">


        <a href="#slide1">1</a>
        <a href="#slide2">2</a>
        <a href="#slide3">3</a>
        <a href="#slide4">4</a>
        </div>
    </div>
    
        <div class="slides">

    
        <div class="slide" id="slide1">  <img src="<?php echo $destino; ?>" alt="<?php echo $nome; ?>"></div>
        <div class="slide" id="slide2">  <img src="<?php echo $destino; ?>" alt="<?php echo $nome; ?>"></div>
        <div class="slide" id="slide3">  <img src="<?php echo $destino; ?>" alt="<?php echo $nome; ?>"></div>
        <div class="slide" id="slide4"> <img src="<?php echo $destino; ?>" alt="<?php echo $nome; ?>"></div>
        

    
        </div>
    </div>
    </div>
</div>
<!--fim do slider-->






<div class="comprar">
<span><?php echo $nome; ?></span>
</div>

<button class="buy-button">
<span>Comprar</span>
</button>

<div class="price">
    <strong>R$<?php echo $preco; ?></strong>
</div>


<div class="descricao">
    <strong><p><?php echo $descricao; ?></p></strong>
</div>

<style>
body{
    overflow-x: hidden;
    background-color: #E0E0E0;
}
  /*caixa de pesquisa*/
.search-box{
    position: absolute;
    justify-content: center;
    background: none;
    top: 55px;
    left: 45%;
    transform: translate(-50%, -50%);

    background: white;
    height: 25px;
    border-radius: 40px;
    padding: 10px;

    display: flex;
    justify-content: space-between;
    align-items: center;

}

/*Texto da barra de pesquisa*/
.search-text{
    background: none;
    border: 0;
    outline: 0;
    padding: 0;

    font-size: 14px;

    width: 0;
}
/*Bolinha barra de pesquisa*/
.search-btn{
    width: 45px;
    height: 45px;
    border-radius: 50%;

    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
}
/*Icone de lupa barra aberta*/
.loup2{
    display: none;
}
/*Localização texto da barra de pesquisa*/
.search-box .search-text{
    width: 500px;
    padding-left: 10px;
  }
  
/*Lupa barra fechada*/
.search-box:hover > .search-btn .loup{
    display: none;
}
/*Lupa barra aberta*/
.search-box:hover > .search-btn .loup2 {
    display: block;
}
/*Letra do entre ou cadastra-se*/
.headerletra{
  justify-content: space-around;
  font-family:Arial, Helvetica Neue, Helvetica, sans-serif;
  font-size: 13px;
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
  
  
    /*deixa os icones um do lado do outro*/
  .nav-list {
    list-style: none;
    display: flex;
  }
  /*distancia entre os icones*/
  .nav-list li {
    letter-spacing: 3px;
    margin-left: 32px;
  }




  /*slider*/
  .slides{
    position: absolute;
    left: 10%;
    margin: 0 auto;
    background-color: wheat;
    display: flex;
    width: 40vw;
    height: auto; 
    overflow:hidden;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    margin-top: 132px;
    border-radius: 20px;
    border: 2px solid black;
  }
  
  ::-webkit-scrollbar {
    width: 10px;
    height: 10px;
    background-color: #CCCCCC;
}

::-webkit-scrollbar-track {
    background: #CCCCCC;
}
::-webkit-scrollbar-track-piece {
    background: #CCCCCC;
}
::-webkit-scrollbar-thumb {
    background: #333333;
    border-radius: 5px;
}


/*slider*/
.slides{
    position: absolute;
    left: 10%;
    margin: 0 auto;
    background-color: wheat;
    display: flex;
    width: 40vw;
    height: auto; 
    overflow:hidden;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    margin-top: 132px;
    border-radius: 20px;
    border: 2px solid black;
  }
  
  ::-webkit-scrollbar {
    width: 10px;
    height: 10px;
    background-color: #CCCCCC;
}

::-webkit-scrollbar-track {
    background: #CCCCCC;
}
::-webkit-scrollbar-track-piece {
    background: #CCCCCC;
}
::-webkit-scrollbar-thumb {
    background: #333333;
    border-radius: 5px;
}


  .slide{
    color: white;
    font-size: 70px;
    text-align: center;
    width: 50vw;
    height: 650px;
    flex-shrink: 0;
    scroll-snap-align: start;

  }

  .slides img{
    width: 20vw;
    padding-right: 30%;
    margin-left: 10%;
    height: 25vw;
    margin-top: 15%;
  }

  #slide1 {background-color: white;}
  #slide2 {background-color:  white;}
  #slide3 {background-color: white;}
  #slide4 {background-color: white;}

  .slider{
    display: flex;
    position: absolute;
    left: 26%;
    top: 85%;
  }
  .slider-nav{
    display: flex;
    gap: 1rem;
  }
  .slider-nav a{
    text-decoration: none;
    color:white;
    width: 25px;
    height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #000000;
    border-radius: 50%;
    font-family: "Trebuchet MS",Arial,sans-serif;
  }

 /*slider-fim*/







  .comprar{
    position: absolute;
    left: 63%;
    top: 24%;
    color: #4d4d4d;
    line-height: 1.75rem;
    font-size: 35px;
    font-weight: 700;
    text-transform: none;
    font-family: "Trebuchet MS",Arial,sans-serif;
  }

  #buy-button {
    width: 75%;
}
.buy-button:hover {
    background: #1d5316;
    color: #fff;
}
.buy-button {
    position: absolute;
    top: 70%;
    left: 67%;
    padding: 13px;
    border: 0;
    border-radius: 5px;
    font-weight: 500;
    font-style: normal;
    font-family: "Trebuchet MS",Arial,sans-serif;
    color: #fff;
    background: #139b29;
    text-transform: uppercase;
    cursor: pointer;
    outline: 0;
    box-sizing: border-box;
    transition-duration: .3s;
    text-decoration: none;
    vertical-align: middle;
    width: 200px;
    font-size: 20px;
   }

   .price{
    position: absolute;
    top: 33%;
    left: 66%;
    color: #128b40;
    letter-spacing: -1px;
    font-size: 50px;
    margin-top: 0;
    line-height: unset;
    font-family: "Trebuchet MS",Arial,sans-serif;
   }


   .descricao{
    position: absolute;
    top: 65%;
    left: 65%;
    color: #4d4d4d;
    letter-spacing: -1px;
    font-size: 30px;
    margin-top: 0;
    line-height: unset;
    font-family: "Trebuchet MS",Arial,sans-serif;

   }

  
   .star{
    position: absolute;
    left: 65%;
    top: 46%;
    color: #4d4d4d;
    letter-spacing: -1px;
    font-size: 20px;
    margin-top: 0;
    line-height: unset;
    font-family: "Trebuchet MS",Arial,sans-serif;
   }


   .star img{
    height: 50px;

   }    





   .header3{
    position: absolute;
    top: 4%;
    left: 10%;
    width: 100px;
    color: white;
    height: 100px;
    background: none;
  }

</style>









</body>
</html>