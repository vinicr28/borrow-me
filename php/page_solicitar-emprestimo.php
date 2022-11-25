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
        <link rel="stylesheet" href="../css/styles_solicitaemprestimo.css"/>
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
                            <li class="menu__lista__item"><a href="page_solicitar-emprestimo.php">Nova Requisição</a></li>
                            <li class="menu__lista__item"><a href="#">Suporte</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </header>
        <!-- TÉRMINO CABEÇALHO-->


        <main class="main">
            
                <section class="sections secoes-formularios" id="secao-requisita">
                    
                    
                    <div class="div-box-todos-formularios">
                        <h2 class="titulosh2">Requisição</h2>

                        <form action="./perfil-usuario.html" class="principal__requisita__formulario">
                        
                            <fieldset class="principal__requisita__formulario__fieldsets" id="fieldset__solicitante">
                                <legend class="titulosh3">Meus Dados</legend>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="nome" id="nome" class="input" type="text" placeholder="Nome" data-tipo="nome" required>
                                    <label class="input-label" for="nome">Nome</label>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="email" id="email" class="input" type="email" placeholder="Email" data-tipo="email" required>
                                    <label class="input-label" for="email">Email</label>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="cpf" id="cpf" class="input" type="text" placeholder="CPF" data-tipo="cpf" required>
                                    <label class="input-label" for="cpf">CPF</label>
                                </div>
                            </fieldset>

                            <fieldset  class="principal__requisita__formulario__fieldsets" id="fieldset__requisicao">
                                <legend class="titulosh3">Dados da Requisição</legend>
                                <div class="div-fieldsets__cadainfo">
                                    <label class="input-label" for="categoria">Categoria do Produto Desejado</label>
                                    <select name="categoria">
                                        <option value="Produto1">Produto 1</option>
                                        <option value="Produto2">Produto 2</option>
                                        <option value="Produto3">Produto 3</option>
                                    </select>
                                </div>
                        
                                <div class="div-fieldsets__cadainfo">
                                    <input name="dataretirada" id="dataretirada" class="input" type="date" placeholder="Data de Retirada" data-tipo="dataRetirada" required>
                                    <label class="input-label" for="retirada">Data de Retirada</label>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="datadevolucao" id="datadevolucao" class="input" type="date" placeholder="Data de Devolulção" data-tipo="dataDevolucao" required>
                                    <label class="input-label" for="devolucao">Data de Devolução</label>
                                </div>
                            </fieldset>
                            <button type="submit" class="todos-botoes">Solicitar</a>
                        </form>
                    </div>
    
                </section>
      
        </main>


<?php

require_once('footer.php');

?>