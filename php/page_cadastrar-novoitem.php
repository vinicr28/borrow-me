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
        <link rel="stylesheet" href="../css/rodape/rodape.css">
        <link rel="stylesheet" href="../css/titulos/titulos.css">
        <link rel="stylesheet" href="../css/formularios.css">
        <link rel="stylesheet" href="../css/styles_cadastrarnovoitem.css">
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
                            <li class="menu__lista__item"><a href="page_home.php">Home</a></li>
                            <li class="menu__lista__item"><a href="#principal__meusprodutos">Gerenciamento</a></li>
                            <li class="menu__lista__item"><a href="#principal__novarequisicao">Nova Requisição</a></li>
                            <li class="menu__lista__item"><a href="#">Suporte</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </header>
        <!-- TÉRMINO CABEÇALHO-->


        <main>

        <section class="sections secoes-formularios" id="principal__cadastro">
                <div class="div-box-todos-formularios" id="div-novoitem">
                    <h2 class="titulosh2">Cadastrar Novo Item</h2>
                    
                    <form class="principal__cadastro__formulario" action="funcoes-sql.php" method="POST">
                        <input type="hidden" name="acao" value="cadastraritem">
                    
                        <fieldset class="principal__cadastro__formulario__fieldsets">
                            <div class="div-fieldsets__cadainfo">
                                <label>Título do Anúncio</label>
                                <input type="text" placeholder="ex.: microfone sem fio, carro elétrico, macbook 11" name="titulo"/>
                            </div>
                            <div class="div-fieldsets__cadainfo">
                                <label>Subtítulo</label>
                                <input type="text" placeholder="Renault Kwid 2021 E-Tech 100% Elétrico" name="subtitulo"/>
                            </div>
                            <div class="div-fieldsets__cadainfo">
                                <label>Detalhes</label>
                                <input type="text" placeholder="Todas as informações sobre o item" name="detalhes"/>
                            </div>
                            <div class="div-fieldsets__cadainfo">
                                <label for="categoria">Categoria</label>
                                <select id="categoria" name="categoria">
                                    <option value="Automoveis">Automóveis</option>
                                    <option value="Games">Games</option>
                                    <option value="Esportes">Esportes</option>
                                    <option value="Acomodacao">Acomodação</option>
                                </select>
                            </div>
                            <div class="div-fieldsets__cadainfo">
                                <label>Preço da diária</label>
                                <input type="text" placeholder="R$" name="preco" onkeypress="return event.charCode >= 48 && event.charCode <= 57"/>
                            </div>
                            <div class="div-fieldsets__cadainfo">
                                <label>Foto do Produto</label>
                                <input type="file" accept="image/*" name="foto"/>
                            </div>



                        </fieldset>
                        
                        <div class="button_novoitem">
                            <button type="submit" class="todos-botoes">
                                Cadastrar
                            </button>
                        </div>
                    
                        
                    </form>
                </div>
    
            </section>
    
    
            
        </main>


<?php

require_once('footer.php');

?>