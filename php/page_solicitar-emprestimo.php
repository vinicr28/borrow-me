<?php
    require "autentica.php";
    require "funcoes-sql.php";
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

                <div class="container-cabecalho__log">
                    <p >Olá, <span style="font-weight:bold"> <?php echo $_SESSION['nome']; ?> </span></p>
                    <span > Não é você, <a style="text-decoration:underline" href="logout.php">clique aqui</a>.</span>
                </div>
            </div>
        </header>
        <!-- TÉRMINO CABEÇALHO-->


        <main class="main">
            
                <section class="sections secoes-formularios" id="secao-requisita">
                    
                    
                    <div class="div-box-todos-formularios" id="requisita__form">
                        <h2 class="titulosh2">Requisição</h2>

                        <form action="funcoes-sql.php" method="POST">
                            
                        <fieldset class="fields-requisicao" id="box-form-dadospessoais">
                            <legend class="titulosh3">Solicitante</legend>    
                            <div id="div-nome">
                                    <label>Nome</label><br>
                                    <input type="text" placeholder="<?php echo $_SESSION['nome']; ?> " value="<?php echo $_SESSION['nome']; ?>" name="nome" disabled=""/>
                                </div>
                                <!-- -->
                                <div id="div-cpf">
                                    <label>CPF</label><br>
                                    <input type="text" placeholder="<?php echo $_SESSION['cpf']; ?> " value="<?php echo $_SESSION['cpf']; ?>" name="cpf" disabled=""/>  
                                </div>
                                <div id="div-email">
                                    <label>Email</label><br>
                                    <input type="email" placeholder="<?php echo $_SESSION['email']; ?> " value="<?php echo $_SESSION['email']; ?>" name="email" disabled=""/>
                                </div>
                            </fieldset>


                            <fieldset class="fields-requisicao">
                                <legend class="titulosh3">Dados da Requisição</legend>
                                <div id="div-produto">
                                    <label>Item</label>
                                    <select name="categoria">
                                        <?php
                                            
                                        ?>









                                        <option value="Produto1">Produto 1</option>
                                        <option value="Produto2">Produto 2</option>
                                        <option value="Produto3">Produto 3</option>
                                    </select>
                                </div>
                        
                                <div class="div-fieldsets__cadainfo">
                                    <label for="retirada">Data de Retirada</label><br>
                                    <input name="dataretirada" type="date" required>
                                </div>
                                <div class="div-fieldsets__cadainfo">
                                    <label for="devolucao">Data de Devolução</label><br>
                                    <input name="datadevolucao" type="date" required>
                                </div>
                            </fieldset>
                            <button type="submit" class="todos-botoes" id="btt-solicitar">Solicitar</a>
                        </form>
                    </div>
    
                </section>
      
        </main>


<?php

require_once('footer.php');

?>