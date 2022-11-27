<?php

    require 'funcoes-gerais.php';
    require 'funcoes-sql.php';

    //var_dump($currentCOD);
    //$currentCOD = "3";
    //$currentCOD = $_GET['selecionadoID'];
    echo "Página Produto";
    var_dump($currentCOD);
    $sql = "SELECT * FROM todosprodutos WHERE cod=".$currentCOD;
    $resposta = $conn_sql->query($sql);
    $row = $resposta->fetch_object();
    var_dump($row);

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
        <link rel="stylesheet" href="../css/styles_produto.css"/>

        
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

                <div class="container-cabecalho__log">
                    <p >Olá, <span style="font-weight:bold"> <?php echo $_SESSION['nome']; ?> </span></p>
                    <span > Não é você, <a style="text-decoration:underline" href="logout.php">clique aqui</a>.</span>
                </div>

            </div>
        </header>
        <!-- TÉRMINO CABEÇALHO-->

        <main>
            <div class="div-box-todos-formularios" id="div-box-form-novoemprestimo">
                <form action="funcoes-sql.php" method="POST">
                    <input type="hidden" name="acao" value="prepararemprestimo">
                    <input type="hidden" name="cCOD" value="<?php echo $currentCOD; ?>">
                    
                    <fieldset class="field-anuncio">                                  
                            <input type="text" value="<?php echo $row->titulo; ?>" name="titulo">
                    </fieldset>
                    <fieldset class="field-anuncio">                                  
                            <img src="<?php echo $row->imagem; ?>" alt="">
                    </fieldset>
                    <fieldset class="field-anuncio">                                  
                            <input type="text" value="<?php echo $row->resumo; ?>" name="subtitulo">
                    </fieldset>
                    <fieldset class="field-anuncio">                                  
                            <input type="text" value="<?php echo $row->detalhes; ?>" name="detalhes">
                    </fieldset>
                    <fieldset class="field-anuncio">                                  
                            <input type="" value="<?php echo $row->preco; ?>" name="preco">
                    </fieldset>

                    <div class="div-botoes-center">
                        <button type="submit" class="todos-botoes">
                            Pedir Emprestado
                        </button>
                    </div>
                </form>
            </div>   



        </main>




    </body>

<?php

    require_once('footer.php');

?>