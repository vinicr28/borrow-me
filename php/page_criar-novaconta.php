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
        <link rel="stylesheet" href="../css/titulos/teste_cadastro.css">
    </head>

<body>
     <!-- CABEÇALHO -->
     <header>
        <div class="container-cabecalho">

            <div class="container-cabecalho__logo">
                <a href="../index.php">
                <img class="cabecalho__logo__imagem" src="../medias/logo/1.png"/>
                </a>
            </div>
        </div>
    </header>
    <!-- TÉRMINO CABEÇALHO-->

    <section class="sections secoes-formularios">
        <div class="div-box-todos-formularios">
            

            <form action="funcoes-sql.php" method="POST">
                <input type="hidden" name="acao" value="criarconta">
                <div>
                  <h2 class="titulosh2">Faça Seu Cadastro</h2>
                </div>
                <fieldset class="field-cadastro" id="box-form-dadospessoais">
                    <div>
                        <label>Nome</label>
                        <input type="text" placeholder="Qual o seu nome completo?" name="nome" required/>
                    </div>
                    <div>
                        <label>CPF</label>
                        <input type="text" placeholder="Com 11 dígitos" name="cpf" required/>
                    </div>
                </fieldset>
                <fieldset class="field-cadastro" id="box-form-dadospessoais2">
                    <div>
                        <label>Data de Nascimento</label>
                        <input type="date" placeholder="" name="datanasc" required/>
                    </div>
                    <div>
                        <label>Telefone</label>
                        <input type="tel" placeholder="(xx)xxxxx-xxxx" name="tel" pattern= "^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$" required/>
                    </div>
                </fieldset>    
                <fieldset class="field-cadastro" id="box-form-endereco">
                    <div>
                        <label>CEP</label>
                        <input type="text" placeholder="0000-000" name="cep" pattern="[\d]{5}-?[\d]{3}" required/>
                    </div>
                    <div>
                        <label>Estado</label>
                        <select id="categoria" name="uf">
                            <option value="RJ">RJ</option>
                            <option value="SP">SP</option>
                            <option value="PR">PR</option>
                        </select>
                        <input type="text" placeholder="" name="uf"/>
                    </div>
                </fieldset>
                <fieldset class="field-cadastro" id="box-form-login">
                    <div class="email">
                        <label>Email</label>
                        <input type="email" placeholder="Digite o Email" name="email" required/>
                    </div>
                    <div class="senha">
                        <label>Senha</label>
                        <div class="confirma_senha">
                            <div class="senha1">
                                <input type="password" placeholder="Senha" name="senha" required/>
                            </div>
                            <div class="senha2">
                                <input type="password" placeholder="Confirme sua Senha" name="confirmasenha" required/>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="button_login">
                    <button type="submit" class="todos-botoes">
                        Cadastrar
                    </button>
                </div>
                <div class="clique_aqui">
                    <span>Já tem cadastro? <a href="./page_login.php" style="color:#F2B707;">Clique aqui</a></span>
                </div>
            </form>


        </div>
    </section>

<?php
    require_once('funcoes-gerais.php');
    require_once('funcoes-sql.php');
    require_once('footer.php');

?>