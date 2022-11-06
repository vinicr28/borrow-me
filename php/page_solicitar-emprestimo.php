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
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="email" id="email" class="input" type="email" placeholder="Email" data-tipo="email" required>
                                    <label class="input-label" for="email">Email</label>
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="cpf" id="cpf" class="input" type="text" placeholder="CPF" data-tipo="cpf" required>
                                    <label class="input-label" for="cpf">CPF</label>
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
                                </div>
                            </fieldset>
                            <fieldset  class="principal__requisita__formulario__fieldsets" id="fieldset__requisicao">
                                <legend class="titulosh3">Dados da Requisição</legend>
                                <div class="div-fieldsets__cadainfo">
                                    <label class="input-label" for="titulo_obra">Obra</label>
                                    <select id="titulo_obra" name="estado">
                                        <option value="Livro1">Livro 1</option>
                                        <option value="Livro2">Livro 2</option>
                                        <option value="Livro3">Livro 3</option>
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
                                </div>
                        
                                <div class="div-fieldsets__cadainfo">
                                    <input name="dataretirada" id="dataretirada" class="input" type="date" placeholder="Data de Retirada" data-tipo="dataRetirada" required>
                                    <label class="input-label" for="retirada">Data de Retirada</label>
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="datadevolucao" id="datadevolucao" class="input" type="date" placeholder="Data de Devolulção" data-tipo="dataDevolucao" required>
                                    <label class="input-label" for="devolucao">Data de Devolução</label>
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
                                </div>
                            </fieldset>
                            <fieldset  class="principal__requisita__formulario__fieldsets" id="fieldset__endereco" >
                                <legend class="formulario__fieldsets__legendas">Endereço</legend>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="cep" id="cep" class="input" type="text" placeholder="CEP" data-tipo="cep" pattern="[\d]{5}-?[\d]{3}" required>
                                    <label class="input-label" for="cep">CEP</label>
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="logradouro" id="logradouro" class="input" type="text" placeholder="Logradouro" data-tipo="logradouro" required>
                                    <label class="input-label" for="logradouro">Logradouro</label>
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="cidade" id="cidade" class="input" type="text" placeholder="Cidade" data-tipo="cidade" required>
                                    <label class="input-label" for="cidade">Cidade</label>
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <input name="estado" id="estado" class="input" type="text" placeholder="Estado" data-tipo="estado" required>
                                    <label class="input-label" for="estado">Estado</label>
                                    <span class="input-mensagem-erro">Este campo não está válido</span>
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