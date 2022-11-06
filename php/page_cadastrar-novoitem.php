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
                            <li class="menu__lista__item"><a href="home.html">Home</a></li>
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
                <div class="div-box-todos-formularios">
                    <h2 class="titulosh2">Cadastrar Novo Item</h2>
                    
                    <form action="./cadastroconcluido-item.html" class="principal__cadastro__formulario">
                    
                        <fieldset class="principal__cadastro__formulario__fieldsets" id="fieldset__categoria">
                            <legend class="titulosh3">Categoria</legend>
                    
                            <div class="div-fieldsets__cadainfo">
                                <label class="input-label" for="categoria-novoproduto">Categoria</label>
                                <select id="categoria-novoproduto" name="categoria-novoproduto">
                                    <option value="Automoveis">Automóveis</option>
                                    <option value="Games">Games</option>
                                    <option value="Esportes">Esportes</option>
                                    <option value="Acomodacao">Acomodação</option>
                                <span class="input-mensagem-erro">Este campo não está válido</span>
                            </div>
                            <div class="div-fieldsets__cadainfo">
                                <label class="input-label" for="subcategoria-novoproduto">Subcategoria</label>
                                <select id="subcategoria-novoproduto-esportes" name="subcategoria-novoproduto">
                                    <option value="CampoQuadra">Campos e Quadras</option>
                                    <option value="Mesa">Mesa</option>
                                    <option value="Atletismo">Atletismo</option>
                                <span class="input-mensagem-erro">Este campo não está válido</span>
                                <label class="input-label" for="subcategoria-novoproduto">Subcategoria</label>
                                <select id="subcategoria-novoproduto-hobbies" name="subcategoria-novoproduto">
                                    <option value="Musica">Música</option>
                                    <option value="Games">Games</option>
                                    <option value="Pets">PETs</option>
                                <span class="input-mensagem-erro">Este campo não está válido</span>
                                <label class="input-label" for="subcategoria-novoproduto">Subcategoria</label>
                                <select id="subcategoria-novoproduto-casa" name="subcategoria-novoproduto">
                                    <option value="Eletronicos">Eletrônicos</option>
                                    <option value="Moveis">Móveis</option>
                                    <option value="Ferramentas">Ferramentas</option>
                                <span class="input-mensagem-erro">Este campo não está válido</span>
                            </div>
                        </fieldset>
                        <fieldset  class="principal__cadastro__formulario__fieldsets" id="fieldset__dados">
                            <legend class="titulosh3">Descrição do Produto</legend>
                            <div class="div-fieldsets__cadainfo">
                                <input name="descricao-novoproduto" id="descricao-novoproduto" class="input" type="text" placeholder="Faça uma breve explicação sobre o item" data-tipo="descricao-novoproduto" required>
                                <label class="input-label" for="descricao-novoproduto">Descrição</label>
                                <span class="input-mensagem-erro">Este campo não está válido</span>
                            </div>
                            <div class="div-fieldsets__cadainfo">
                                <label class="input-label" for="tipo-novoproduto">Tipo</label>
                                <select id="tipo-novoproduto" name="tipo-novoproduto">
                                    <option value="Físico">Físico</option>
                                    <option value="Digital">Digital</option>
                                <span class="input-mensagem-erro">Este campo não está válido</span>
                            </div>
                            <div class="div-fieldsets__cadainfo">
                                <label class="input-label" for="cor-novoproduto">Cor Principal</label>
                                <select id="cor-novoproduto" name="cor-novoproduto">
                                    <option value="Amarelo">Amarelo</option>
                                    <option value="Azul">Azul</option>
                                    <option value="Branco">Branco</option>
                                    <option value="Cinza">Cinza</option>
                                    <option value="Laranja">Laranja</option>
                                    <option value="Preto">Preto</option>
                                    <option value="Verde">Verde</option>
                                    <option value="Vermelho">Vermelho</option>
                                    <option value="Roxo">Roxo</option>
                                    <option value="Outra">Outra</option>
                                <span class="input-mensagem-erro">Este campo não está válido</span>
                            </div>
                    
                        </fieldset>
                    
                        <button class="todos-botoes">Cadastrar</a>
                    </form>
                </div>
    
            </section>
    
    
            
        </main>


<?php

require_once('footer.php');

?>