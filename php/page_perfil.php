<?php
    require "autentica.php";
    require "funcoes-sql.php";
    include('config.php');
    $currentID = $_SESSION['id'];
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
        <link rel="stylesheet" href="../css/styles_perfil.css"/>
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


        <main class="principal">
            <section class="sections" id="principal__perfil">
                <h2 class="titulosh2">Minha Conta</h2>
                
                <div id="divcontainer-principal__perfil__perfil">
                    <div class="divcontainer-principal__perfil__item" id="principal__perfil__perfil__resumo">
                        <h3 class="titulosh3">Sobre Mim</h3>

                        <div id="principal__perfil__perfil__resumo__profile">    
                                <p>                               
                                    <?php echo $_SESSION['descricao']; ?>          
                                </p>                            
                        </div>                       
                    </div>
                    <div class="divcontainer-principal__perfil__item" id="principal__perfil__perfil__conta">
                        <h3 class="titulosh3">Configurações</h3>

                            
                            <div class="div-botoes-center">
                                <button class="todos-botoes">
                                    <a href="./page_perfil-editar.php">Editar Perfil</a>
                                </button>
                                <button class="todos-botoes">
                                    <a href="logout.php">Encerrar Sessão</a>
                                </button>
                                <button  class="todos-botoes">
                                    <a href="logout.php">Exluir Conta</a>
                                </button>
                            </div>

                    </div>
                </div>

                
            </section>



            <section class=" sections" id="principal__naomeusprodutos">
                <h2 class="titulosh2">Produtos da Comunidade</h2>

                <h3 class="titulosh3">Meus Empréstimos</h3>
                <div class="principal__naomeusprodutos__emuso">

                    <table class="tab-emprestimos">
                        <tr class="tab-linhas">
                            <td class="tab-colunas">Transação</td>
                            <td class="tab-colunas">Código Produto</td>
                            <td class="tab-colunas">Descrição</td>
                            <td class="tab-colunas">Retirada</td>
                            <td class="tab-colunas">Devolucao</td>
                            <td class="tab-colunas">ID Proprietário</td>
                            <td class="tab-colunas">Valor Unitário</td>
                        </tr>
                        <?php 
                            // echo "Teste PHP";
                            $sql = "SELECT log_transacao, id_proprietario, cod_produto, dt_retirada, dt_devolucao FROM todosemprestimos WHERE id_solicitante = '$currentID' ";
                            
                            

                            $resposta = mysqli_query($conn_sql, $sql);
                            // echo "<br>";
                            // var_dump($resposta);
                            // echo "Fim de Resposta <br>";
            
                            if($resposta) {
                                while($emprestimos = mysqli_fetch_assoc($resposta)){
                                    $codProduto = $emprestimos['cod_produto'];
                                    $sqlP = "SELECT * FROM todosprodutos WHERE cod = '$codProduto' ";
                                    $resP = $conn_sql->query($sqlP);
                                    $item = mysqli_fetch_assoc($resP);
                                    //var_dump($item);
                                    
                                    


                                    echo "<tr class=\"tab-linhas\">
                                            <td class=\"tab-colunas\">".$emprestimos['log_transacao']."</td>
                                            <td class=\"tab-colunas\">".$emprestimos['cod_produto']."</td>
                                            <td class=\"tab-colunas\">".$item['titulo']."</td>
                                            <td class=\"tab-colunas\">".$emprestimos['dt_retirada']."</td>
                                            <td class=\"tab-colunas\">".$emprestimos['dt_devolucao']."</td>
                                            <td class=\"tab-colunas\">".$emprestimos['id_proprietario']."</td>
                                            <td class=\"tab-colunas\">R$ ".$item['preco'].",00</td>
                                         </tr>";   
                
                                    // echo "emprestimos a seguir: ";
                                    // echo $emprestimos;
                                    // var_dump($emprestimos);
                                    // echo "<br>";

                                    // echo "<p>".$emprestimos['dt_retirada']."</p>    <td>     </td>";
                                    // echo "</tr>";
                                }
                            }

                        ?>
                    </table>


                </div>





                <h3 class="titulosh3">Outros</h3>
                <div class="principal__naomeusprodutos__emuso">
                    <div class="div-container__fichas">
                    <div class="div-subcontainer__fichas">
                    
                        <div class="div-subcontainer__fichas__item">
                            <div class="div-subcontainer__fichas__item__imagem">
                                <img class="fichas__item__imagem" data-src="https://st2.depositphotos.com/1006009/10305/i/450/depositphotos_103059822-stock-photo-whitewater-kayak-on-rocky-shore.jpg" onerror="this.src ='/images/logodefault.png'" src="https://st2.depositphotos.com/1006009/10305/i/450/depositphotos_103059822-stock-photo-whitewater-kayak-on-rocky-shore.jpg">
                            </div>
                            <div class="div-subcontainer__fichas__item__descricao">
                                <h4 class="fichas__item__titulos">Caiaque Solar</h4>
                                <p>Para curtir muitas aventuras</p>
                            </div>
                        </div>
                        <div class="div-subcontainer__fichas__item">
                            <div class="div-subcontainer__fichas__item__imagem">
                                <img class="fichas__item__imagem" data-src="https://i.blogs.es/1c0d50/macbook-air-m2-0/1366_2000.jpeg" onerror="this.src ='/images/logodefault.png'" src="https://i.blogs.es/1c0d50/macbook-air-m2-0/1366_2000.jpeg">
                            </div>
                            <div class="div-subcontainer__fichas__item__descricao">
                                <h4 class="fichas__item__titulos">Notebook Profissional</h4>
                                <p>Praticamente novo, com pacote Office já instalado.</p>
                            </div>
                        </div>
                        <div class="div-subcontainer__fichas__item">
                            <div class="div-subcontainer__fichas__item__imagem">
                                <img class="fichas__item__imagem" data-src="https://www.reviewbox.com.br/wp-content/uploads/2019/07/pe%CC%81-de-pato-scaled.jpg" class=" lazyloaded" onerror="this.src ='/images/logodefault.png'" src="https://www.reviewbox.com.br/wp-content/uploads/2019/07/pe%CC%81-de-pato-scaled.jpg">
                            </div>
                            <div class="div-subcontainer__fichas__item__descricao">
                                <h4 class="fichas__item__titulos">Nadadeira</h4>
                                <p>Nadadeiras pé de pato, para realizar mergulhos com conforto.</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                
            </section>

            <section class="sections" id="principal__novarequisicao">
                <h2 class="titulosh2" id="h2black">Não encontrou o que precisa?</h2>

                <div class="div-container__grades">
                    <div class="div-grades__item" style="background-image: url('https://images.pexels.com/photos/707046/pexels-photo-707046.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                        <a href="./html/automoveis.html">
                            <div class="div-grades__item__areatexto">
                                <div>
                                    <button class="todos-botoes"><a href="page_cadastrar-novoitem.php">Cadastrar Novo Item</a></button>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="div-grades__item" style="background-image: url('https://images.pexels.com/photos/1500610/pexels-photo-1500610.jpeg?auto=compress&cs=tinysrgb&w=1600');">
                        <a href="./html/jogos.html">
                            <div class="div-grades__item__areatexto">
                                <div>
                                    <button class="todos-botoes"><a href="page_solicitar-emprestimo.php">Solicitar Empréstimo</a></button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>  
            
            </section>
            
        </main>

<?php

    require_once('footer.php');

?>