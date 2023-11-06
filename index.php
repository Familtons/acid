<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <link rel="shortcut icon" href="./icones/vdd.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acid - Projeto final de PW2</title>

</head>
<body> 

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
    margin-left: 5%;                          
    background-color: wheat;
    display: flex;
    width: 90%;
    height: auto; 
    overflow-y: hidden;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
    margin-top: 10%;
    border-radius: 20px;
    border: #0c0b0b; 
  }
  .slider{
    display: flex;
    scroll-snap-type: x mandatory;
  }
  .slide{
    display: flex;
    color: white;
    font-size: 70px;
    text-align: center;
    width: 100vw;
    height: 600px;
    flex-shrink: 0;
    scroll-snap-align: start;
  }
  .controleslider{
            display: none;
        }
  .slideresquerdo{
    left: 0;
  }
  .sliderdireito{
    right:0;
  }
  .slides img{
    width: 100%;
    height: 100%;
  }

  #slide1 {background-color: green;}
  #slide2 {background-color: rgb(219, 223, 0);}
  #slide3 {background-color: rgb(0, 0, 0);}
  #slide4 {background-color: rgb(195, 223, 195);}


  /*slider-fim*/




/* Vitrine */
.vitrine {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.catalogo {
  width: calc(25% - 80px); 
  margin-left: 30px;
  margin-top: 100px;
  margin-bottom: 0px;
  box-sizing: border-box;
  background: white;
  border-radius: 3%;
  padding: 60px;
  text-align: center;
  font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
  border: 0.2px solid #ccc;
}
main.vitrine section.catalogo h3{
  color:#0c0b0b;
}
main.vitrine section.catalogo p{
  color:#0c0b0b;
}
main.vitrine section.catalogo:first-child {
  margin-left: 0; 
}

main.vitrine section.catalogo img {
  max-width: 80%;
  max-height: 50%;
}

main.vitrine section.catalogo h3 {
  font-size: 16px;
  margin: 8px 0;
}

main.vitrine section.catalogo strong {
  font-size: 20px;
  margin: 8px 0;
}

main.vitrine section.catalogo span {
  font-weight: 300;
  font-size: 14px;
  margin-bottom: 8px;
  color: #7a7c20;
}

footer{
    margin-top: 80px;
    background-color: black;
    padding: 50px 10px;
    width: 100%;
}
.container-footer{
    max-width: 1400px;
    padding: 0 4%;
    margin: auto;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}
.row-footer{
    display: flex;
    flex-wrap: wrap;
}

.footer-col{
    width: 25%;
    padding: 0 15px;
}
.footer-col h4{
    font-size: 22px;
    color: white;
    margin-bottom: 20px;
    font-weight: 500;
    position: relative;
    text-transform: uppercase;
}
.footer-col ul{
    list-style: none;
}
.footer-col ul li{
    margin: 10px 0;
}
.footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: white;
    text-decoration: none;
    font-weight: 300;
    display: block;
    transition: all 0.3s ease;
}
.footer-col ul li a:hover{
    color: #cecdcd;
    padding-left: 10px;
}

.footer-col .form-sub input{
    width: 100%;
    padding: 10px;
    font-size: 15px;
    outline: none;
    border: 1px solid white;
    color: white;
    background-color: #415aca;
}

/* Responsivo */
@media (max-width: 800px) {
    .footer-col{
        width: 50%;
        margin-bottom: 30px;
    }
}
@media (max-width:600px) {
    .footer-col{
        width: 100%;
    }
}

    </style>
    <!--Header-->

    <header>
        <nav>
            <!--Logo-->
          <a class="logo"><img src="./icones/Meu projeto.png" width="170px" height="100x" alt=""></a>
          <!--Barra de pesquisa-->
            <div class="search-box">
                <input type="text" class="search-text" placeholder="O que está procurando?">
                <a class="search-btn">
                    <img class="loup" src="./icones/loup.svg" alt="" width="25px" height="25px">
                    <img class="loup2" src="./icones/loup2.svg" alt="" width="25px" height="25px">
    
                </a>
            </div>
        <!--Icones do Header-->
            <div class="headerletra">
            <ul class="nav-list">
                <li><a href="login.php"><img src="./icones/user.png" width="25px" height="25px" alt=""> <span> Entre ou cadastre-se</span> </a></li>
                <li><a href="#"><img src="./icones/heart.png" width="25px" height="25px" alt=""></a></li>
                <li><a href="#"><img src="./icones/shopping-cart.png" width="25px" height="25px" alt=""></a></li>
                <li><a href="adm.php"><img src="./icones/adm.png" width="25px" height="25px" alt=""></a></li>
            </ul>
            </div>
        </nav>
    </header>
    
    <!--slider-->
    
    <div class="slides">
        <input type="radio" name="slide" id="slide1" class="controleslider">
        <input type="radio" name="slide" id="slide2" class="controleslider">
        <input type="radio" name="slide" id="slide3" class="controleslider">
        <input type="radio" name="slide" id="slide4" class="controleslider">

        <div class="slider">
            <div class="slide" id="slide1"><img src="banner-1.jpg" alt=""></div>
            <div class="slide" id="slide2"><img src="banner-2.jpg" alt=""></div>
            <div class="slide" id="slide3"><img src="banner-3.jpg" alt=""></div>
            <div class="slide" id="slide4"><img src="banner-4.jpg" alt=""></div>
        </div>

        <label for="slide1" class="controleslider slideresquerdo"><</label>
        <label for="slide2" class="controleslider sliderdireito">></label>
        <label for="slide3" class="controleslider slideresquerdo"><</label>
        <label for="slide4" class="controleslider sliderdireito">></label>
    </div>

      </main>
      <!--fim do slider-->
    

<main class="vitrine">
  <?php
  include "buscarvitrine.php";
  ?>
</main>



<footer>
    
    <div class="container-footer">
        <div class="row-footer">
            <!-- rodapé começo-->
            <div class="footer-col">
                <h4>Acid's</h4>
                <ul>
                    <li><a href=""> Nossos serviços </a></li>
                    <li><a href="quemsomos.html"> Quem nós somos? </a></li>
                    <li><a href=""> Trabalhe com a gente! </a></li>
                    <li><a href=""> Privacidade </a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Nossa loja</h4>
                <ul>
                    <li><a href="#">Tênis</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Sandálias</a></li>
                    <li><a href="#">Calçados</a></li>
                    <li><a href="#">Tênis de novo</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h4>Ajuda</h4>
                <ul>
                    <li><a href="#">Onde está meu pedido?</a></li>
                    <li><a href="#">Mande um email</a></li>
                    <li><a href="#">CPNJ</a></li>
                    <li><a href="#">Pagamento</a></li>
                </ul>
            </div>
    

            </div>
        </div>
    </div>
</footer>

</body>
</html>
