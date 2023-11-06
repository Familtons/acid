<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <link rel="shortcut icon" href="vdd.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

</head>

    <body> 
    
        <!--Header-->

        <header>
            <nav>
                <!--Logo-->
                <a class="logo"><a href="acid.html"> <img src="Meu projeto.png" width="170px" height="100x" alt=""></a> </a>
                
  
              </nav>
    </header>

                <!--cadastro-->      
                <main class="vitrine">
                <section class="catalogo">
                <section class="quadrado">
                <section class="conteudo">
                    <h1>Cadastre-se</h1>
                    <br>
                    <input name="nome" type="text" class="caixaT" placeholder="Nome" >
                    <br>
                    <input name="sobrenome" type="text" class="caixaT" placeholder="Sobrenome" > 
                    <br>
                    <input name="endereco" type="text" class="caixaT" placeholder="Endereço" > 
                    <br>
                    <input name="email" type="text" class="caixaT" placeholder="E-mail" > 
                    <br>
                    <input name="senha" type="password" class="caixaS" placeholder="Senha">
                    <br>
                    <button> Cadastrar</button>
                    <br>
                    </section>
                    </section>
                    <section class="cadastre">
                    <h1> Já tem uma conta?</h1>
                    <button><a href="login.php">Login</a></button>
                    <br>
                </section>

        </main>
        <style>
            /*Corpo do site*/
            body{
    margin: 0;
    height: 100vh;
    width: 100vw;
    background: white;
    overflow-x: hidden;
/*Localização da barra de pesquisa fechada*/
}
.search-box{
    position:absolute;
    justify-content: center;
    background: none;
    top: 55px;
    left: 45%;
    transform: translate(-50%, -50%);

    background: white;
    height: 32px;
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
/*Cor da barra de pesquisa*/
.search-box:hover > .search-btn{
    background: white;
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
  .logo{
    position: absolute;
    left: 1%;
  }



  

/*login*/


main.vitrine {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 10%;
  padding: 10px;
}
main.vitrine section.quadrado {
  background-image: linear-gradient(to right, black 0, black 50%, white 50%);
  display: flex;
  flex-direction: column;
  align-items: center;
  text-align: center;
  padding: 30rem 35rem 10rem;
  border-radius: 20px;
  max-height: 120px;
  margin-left: 30px;
}
main.vitrine section.conteudo{
  font-family:Arial, Helvetica Neue, Helvetica, sans-serif;
  font-size:100%;
  position:absolute;
  left:60%;
  top:38%;
}
main.vitrine section.conteudo button{
  padding: 1rem 2rem;
  text-transform: uppercase;
  border-radius: 32px;
  border: 0;
  cursor: pointer;
  font-size: 80%;
  font-weight: 500;
  border-color: white;
  margin-bottom: 16px 0;
  margin-top: 11%;
  color: white;
}
main.vitrine section.cadastre{
  position:absolute;
  color:white;
  font-family:Arial, Helvetica Neue, Helvetica, sans-serif;
  left:27%;
  top:38%;
}
main.vitrine section.cadastre button {
  padding: 1rem 2rem;
  text-transform: uppercase;
  border-radius: 32px;
  border: 0;
  cursor: pointer;
  font-size: 80%;
  font-weight: 500;
  border-color: white;
  margin-bottom: 16px 0;
  margin-top: 11%;
  color: white;
}
main.vitrine section.cadastre button a{
  font-size:100%;
  font-family:Arial, Helvetica Neue, Helvetica, sans-serif;
  color: white;
}

main.vitrine section.catalogo button {
  padding: 1rem 3rem;
  text-transform: uppercase;
  border-radius: 32px;
  border: 0;
  cursor: pointer;
  font-size: 80%;
  font-weight: 500;
  color: #fff;
  margin-bottom: 16px 0;
  margin-top: 11%;
}
main.vitrine section.catalogo button a{
  font-size:80%;
  font-family:Arial, Helvetica Neue, Helvetica, sans-serif;
  color: white;
}


main.vitrine section.catalogo .icon {
  width: 100px;
  margin: -50px;
}


main.vitrine section.catalogo img {
  width: 100%;
}


main.vitrine section.catalogo span {
  font-weight: 300;
  max-width: 240px;
  font-size: 80%;
  margin-bottom: 16px;
}








main.vitrine .catalogo button:hover{
  background-color: #222121;
}



/* box do text e senha */

main.vitrine .catalogo input.caixaT{
  border-radius: 3px;
  border: 1px solid rgb(231, 231, 231);
  margin-bottom: 4%;
  padding-left: 1px;
  padding-right: 45px;
  min-height: 30px;
}

main.vitrine .catalogo input.caixaS{
  border-radius: 3px;
  border: 1px solid rgb(231, 231, 231);
  padding-left: 1px;
  padding-right: 45px;
  font-size: 14px;
  min-height: 30px;
  margin-bottom: 12%;
}

/* fim */

main.vitrine .catalogo input.caixaT2{
  border-radius: 3px;
  border: 1px solid rgb(231, 231, 231);
  margin-bottom: 4%;
  padding-left: 1px;
  padding-right: 45px;
  min-height: 30px;
}

main.vitrine .catalogo span.remember{
  color: #377214;
  position: absolute;
  left: 26%;
  top: 60%;
  text-transform: initial;
  font-size: 14px;
  font-weight: 500;
  cursor: pointer;
  font-family:Arial, Helvetica Neue, Helvetica, sans-serif;
}



main.vitrine section.catalogo button {
  background: black
}

main.vitrine section.catalogo {
  box-shadow: 20px 20px 50px -30px #0c0b0b;
}

@media screen and (max-width: 720px) {
  main.vitrine {
      flex-direction: column;
  }

  main.vitrine section.catalogo {
      margin-left: 0;
      margin-bottom: 32px;
  }

  main.vitrine section.catalogo:last-child {
      margin-bottom: 0;
  }

  main.vitrine section.catalogo button {
      font-size: 70%;
  }

}