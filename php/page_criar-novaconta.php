<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criar Conta - Borrow.me</title>

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
        <link rel="stylesheet" href="../css/styles_criarnovaconta.css"/>
    </head>

<body>
     <!-- CABEÇALHO -->
     <header>
        <div class="container-cabecalho">

            <div class="container-cabecalho__logo">
                <a href="../index.html">
                <img class="cabecalho__logo__imagem" src="../medias/logo/1.png"/>
                </a>
            </div>
        </div>
    </header>
    <!-- TÉRMINO CABEÇALHO-->

    <section class="sections secoes-formularios">
        <div class="div-box-todos-formularios">
            <form method="get" action="page_cadastroconcluido-usuario.php">
                <div>
                  <h2 class="titulosh2">Faça Seu Cadastro</h2>
                </div>
                <div>
                    <label>Nome</label>
                    <input type="text" placeholder="Qual o seu nome completo?" name="nome" required/>
                </div>
                <div class="email">
                    <label>Email</label>
                    <input type="email" placeholder="Digite o Email" name="email" required/>
                </div>
                <div>
                    <label>Telefone</label>
                    <input type="tel" placeholder="(xx)xxxxx-xxxx" name="tel" required/>
                </div>
                <div class="senha">
                    <label>Senha</label>
                    <div class="confirma_senha">
                        <div class="senha1">
                            <input type="password" placeholder="Senha" name="senha" required/>
                        </div>
                        <div class="senha2">
                            <input type="password" placeholder="comfirme sua Senha" name="comfirmar senha:" required/>
                        </div>
                    </div>
                </div>
                <div class="button_login">
                   <a onclick href="./index.html">
                        <input type="submit" value="Cadastrar"/>
                   </a>
                </div>
                <div class="clique_aqui">
                    <span>Já tem cadastro? <a href="./login.html" style="color:#F2B707;">Clique aqui</a></span>
                </div>
            </form>
        </div>
    </section>

<?php
require_once('funcoes.php');

require_once('footer.php');

?>