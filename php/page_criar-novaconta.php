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
        <link rel="stylesheet" href="../css/styles_criarconta.css">
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
                    <div id="div-nome">
                        <label>Nome</label><br>
                        <input type="text" placeholder="Qual o seu nome completo?" name="nome" required/>
                    </div>
                    <div class="container-form-inline">
                        <div id="div-cpf">
                            <label>CPF</label><br>
                            <input type="text" placeholder="Com 11 dígitos" name="cpf" required/>
                        </div>
                        <div id="div-dn">
                            <label>Data de Nascimento</label><br>
                            <input type="date" placeholder="" name="datanasc" required/>
                        </div>
                    </div>
                </fieldset>
                  
                <fieldset class="field-cadastro" id="box-form-contato">
                    <div>
                        <label>Telefone</label><br>
                        <input type="tel" placeholder="(xx)xxxxx-xxxx" name="tel" pattern= "^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$" required/>
                    </div>
                    <div>
                        <label>CEP</label><br>
                            <input type="text" placeholder="0000-000" name="cep" pattern="[\d]{5}-?[\d]{3}" required/>
                    </div>    
                    <div>  
                        <label>UF</label><br>
                        <select id="select-categoria" name="uf">
                            <option value="AC">AC</option>
                            <option value="AL">AL</option>
                            <option value="AM">AM</option>
                            <option value="AP">AP</option>
                            <option value="BA">BA</option>
                            <option value="CE">CE</option>
                            <option value="DF">DF</option>
                            <option value="ES">ES</option>
                            <option value="GO">GO</option>
                            <option value="MA">MA</option>
                            <option value="MG">MG</option>
                            <option value="MS">MS</option>
                            <option value="MT">MT</option>
                            <option value="PA">PA</option>
                            <option value="PB">PB</option>
                            <option value="PE">PE</option>
                            <option value="PI">PI</option>
                            <option value="PR">PR</option>
                            <option value="RJ">RJ</option>
                            <option value="RN">RN</option>
                            <option value="RO">RO</option>
                            <option value="RR">RR</option>
                            <option value="RS">RS</option>
                            <option value="SC">SC</option>
                            <option value="SE">SE</option>
                            <option value="SP">SP</option>
                            <option value="TO">TO</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset class="field-cadastro" id="box-form-login">
                    <div id="div-email">
                        <label>Email</label><br>
                        <input type="email" placeholder="Digite o Email" name="email" required/>
                    </div>
                    <div id="div-senhas">
                        <label>Senha</label><br>
                        <div id="div-input-senhas">
                            <div class="senha1">
                                <input type="password" placeholder="Senha" name="senha" required/>
                            </div>
                            <div class="senha2">
                                <input type="password" placeholder="Confirme sua Senha" name="confirmasenha" required/>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div id="div-botoes-center">
                    <div class="button_login">
                        <button type="submit" class="todos-botoes">
                            Cadastrar
                        </button>
                    </div>
                    <div class="clique_aqui">
                        <span>Já tem cadastro? <a href="./page_login.php" style="color:#F2B707;">Clique aqui</a></span>
                    </div>
                </div>
            </form>


        </div>
    </section>

<?php
    require_once('funcoes-gerais.php');
    require_once('funcoes-sql.php');
    require_once('footer.php');

?>