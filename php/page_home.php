<?php
    require "autentica.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Borrow.me</title>

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="../medias/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../medias/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../medias/favicon/favicon-16x16.png">


        <!-- CSS -->
        <link rel="stylesheet" href="../css/reset.css">
        <link rel="stylesheet" href="../css/base.css">
        <link rel="stylesheet" href="../css/titulos/titulos.css">
        <link rel="stylesheet" href="../css/botoes.css">
        <link rel="stylesheet" href="../css/boxes/cards.css">
        <link rel="stylesheet" href="../css/boxes/fichas.css">
        <link rel="stylesheet" href="../css/boxes/grades.css">
        <link rel="stylesheet" href="../css/cabecalho/cabecalho.css">
        <link rel="stylesheet" href="../css/cabecalho/log.css">
        <link rel="stylesheet" href="../css/rodape/rodape.css">
        <link rel="stylesheet" href="../css/titulos/titulos.css">
        <link rel="stylesheet" href="../css/styles_home.css"/>
    </head>

    <body>

        <!-- CABEÇALHO -->
        <header>
            <div class="container-cabecalho">

                <div class="container-cabecalho__logo">
                    <img class="cabecalho__logo__imagem" src="../medias/logo/1.png"/>
                </div>

                <div class="container-cabecalho__menu">
                    <nav class="nav-menu">
                        <ul class="menu__lista">
                            <li class="menu__lista__item"><a href="#">Home</a></li>
                            <li class="menu__lista__item"><a href="#main__categorias">Categorias</a></li>
                            <li class="menu__lista__item"><a href="page_perfil.php">Perfil</a></li>
                            <li class="menu__lista__item"><a href="#">Suporte</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="container-cabecalho__log">
                    <p >Olá, <span style="font-weight:bold"> <?php echo $_SESSION['nome']; ?> </span></p>
                    <span > Não é você, <a style="text-decoration:underline" href="logout.php">clique aqui</a>.</span>
                </div>

            </div>
        </header>
        <!-- TÉRMINO CABEÇALHO-->



        <main class="main" id="main-home">
            
            <section class="sections" id="main__banner">
                <div class="div-main__banner">

                </div>
            </section>
            
            
            <section class="sections" id="main__categorias">
                <h2 class="titulosh2">Categorias</h2>

                <div class="div-container__grades">

                    <div class="div-grades__item" style="background-image: url('https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                        <a href="../html/automoveis.html">
                            <div class="div-grades__item__areatexto">
                                <div>
                                    Automóveis
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="div-grades__item" style="background-image: url('https://images.pexels.com/photos/1500610/pexels-photo-1500610.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                        <a href="../html/jogos.html">
                            <div class="div-grades__item__areatexto">
                                <div>
                                    Jogos
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="div-grades__item" style="background-image: url('https://images.pexels.com/photos/47730/the-ball-stadion-football-the-pitch-47730.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                        <a href="../html/esportes.html">
                            <div class="div-grades__item__areatexto">
                                <div>
                                    Esportes
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="div-grades__item" style="background-image: url('https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                        <a href="../html/acomodacoes.html">
                            <div class="div-grades__item__areatexto">
                                <div>
                                    Acomodação
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </section>

            

            <section class="sections" id="main__emalta">
                <h2 class="titulosh2">Tendências</h2>
            
                <div class="div-container__cards">
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('../bd/bike.jpg');"></div>
                        <p class="cards__item__titulos">
                            Moutain Bike
                        </p>
                        <p class="cards__item__descricao">
                            Montain Bike da marca Santa Cruz
                        </p>
                        <p class="cards__item__price">R$52,00</p>
                        <form action="funcoes-sql.php" method="GET">
                            <input type="hidden" name="acao" value="visualizaranuncio">
                            <input type="hidden" name="cCOD" value="7">
                            <button type="submit" class="todos-botoes">saiba mais</button>
                        </form>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('../bd/apartamentoipanema.png');"></div>
                        <p class="cards__item__titulos">
                            Apartamento de Luxo
                        </p>
                        <p class="cards__item__descricao">
                            Apartamento na Barra da Tijuca com 180m<sup>2</sup>
                        </p>
                        <p class="cards__item__price">R$250,00</p>
                        <form action="funcoes-sql.php" method="GET">
                            <input type="hidden" name="acao" value="visualizaranuncio">
                            <input type="hidden" name="cCOD" value="4">
                            <button type="submit" class="todos-botoes">saiba mais</button>
                        </form>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('../bd/carroapple.jpg');"></div>
                        <p class="cards__item__titulos">
                            Carro Elétrico Apple
                        </p>
                        <p class="cards__item__descricao">
                            Novo lançamento da Apple, carro eletrico!
                        </p>
                        <p class="cards__item__price">R$500</p>
                        <form action="funcoes-sql.php" method="GET">
                            <input type="hidden" name="acao" value="visualizaranuncio">
                            <input type="hidden" name="cCOD" value="6">
                            <button type="submit" class="todos-botoes">saiba mais</button>
                        </form>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('../bd/novomac.jpg');"></div>
                        <p class="cards__item__titulos">
                            Macbook
                        </p>
                        <p class="cards__item__descricao">
                            Macbook Apple 2021
                        </p>
                        <p class="cards__item__price">R$100,00</p>
                        <form action="funcoes-sql.php" method="GET">
                            <input type="hidden" name="acao" value="visualizaranuncio">
                            <input type="hidden" name="cCOD" value="1">
                            <button type="submit" class="todos-botoes">saiba mais</button>
                        </form>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('../bd/raquetetenispraia.png');"></div>
                        <p class="cards__item__titulos">
                            Raquete Beach Tênis
                        </p>
                        <p class="cards__item__descricao">
                            Ótima raquete para uma tarde de beach tenis
                        </p>
                        <p class="cards__item__price">R$35,00</p>
                        <form action="funcoes-sql.php" method="GET">
                            <input type="hidden" name="acao" value="visualizaranuncio">
                            <input type="hidden" name="cCOD" value="8">
                            <button type="submit" class="todos-botoes">saiba mais</button>
                        </form>
                    </div>
                    <div class="div-cards__item">
                        <div class="div-cards__item__imagem" style="background-image: url('../bd/notefuturo.jpg');"></div>
                        <p class="cards__item__titulos">
                            Notbook do Futuro
                        </p>
                        <p class="cards__item__descricao">
                            Melhor notebook do mundo
                        </p>
                        <p class="cards__item__price">R$3.000,00</p>
                        <form action="funcoes-sql.php" method="GET">
                            <input type="hidden" name="acao" value="visualizaranuncio">
                            <input type="hidden" name="cCOD" value="3">
                            <button type="submit" class="todos-botoes">saiba mais</button>
                        </form>
                    </div>
                </div>
                <div id="div-main__emalta__vermais">
                </div>
            </section>
        </main>

<?php

    require_once('footer.php');

?>