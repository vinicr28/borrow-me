<?php
    require "autentica.php";
    require "funcoes-sql.php";

    $currentID = $_SESSION['id'];
    echo $currentID;
    $sql = "SELECT * FROM todosusuarios WHERE id=".$currentID;
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
        <link rel="stylesheet" href="../css/styles_perfil-editar.css"/>
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
                <h3 class="titulosh3">Editar Meu Perfil</h3>
                
                <div id="divcontainer-principal__perfil__perfil">
                        
                    <div class="div-box-todos-formularios" id="principal__perfil__perfil__conta">

                        <div id="principal__perfil__perfil__conta__form">
                            <form action="funcoes-sql.php" method="POST">
                                <input type="hidden" name="acao" value="editar">
                                <input type="hidden" name="cID" value="<?php echo $currentID; ?>">
                                
                                <fieldset class="field-cadastro" id="box-form-aboutme">                                  
                                    <div id="div-about">
                                        <label>Sobre Mim</label><br>
                                        <input type="text" value="<?php echo $row->about_me; ?>" name="aboutme">
                                    </div>
                                </fieldset>
    
                                <fieldset class="field-cadastro" id="box-form-dadospessoais">
                                    <div id="div-nome">
                                        <label>Nome</label><br>
                                        <input type="text" value="<?php echo $row->nome; ?>" name="nome" />
                                    </div>
                                    <div id="div-cpf">
                                            <label>CPF</label><br>
                                            <input type="text" value="<?php echo $row->cpf; ?>" name="cpf"/>
                                    </div>
                                    <div id="div-dn">
                                            <label>DN</label><br>
                                            <input type="date" value="<?php echo $row->data_nascimento; ?>" name="datanasc"/>
                                    </div>
                                </fieldset>
                                
                                <fieldset class="field-cadastro" id="box-form-contato">
                                    <div>
                                        <label>Telefone</label><br>
                                        <input type="tel" value="<?php echo $row->telefone; ?>" name="tel" pattern= "^\([1-9]{2}\) (?:[2-8]|9[1-9])[0-9]{3}\-[0-9]{4}$"/>
                                    </div>
                                    <div>
                                        <label>CEP</label><br>
                                            <input type="text" value="<?php echo $row->cep; ?>" name="cep" pattern="[\d]{5}-?[\d]{3}" required/>
                                    </div>    
                                    <div>  
                                        <label>UF</label><br>
                                        <select id="select-categoria" name="uf">
                                            <option value="<?php echo $row->uf; ?>"><?php echo $row->uf; ?></option>
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
                                        <input type="email" value="<?php echo $row->email; ?>" name="email"/>
                                    </div>
                                    <div id="div-senha">
                                        <label>Senha</label><br>               
                                        <input type="password" value="<?php echo $row->senha; ?>" name="senha">
                                    </div>
                                </fieldset>
                                <div class="div-botoes-center">
                                    <button type="submit" class="todos-botoes">
                                        OK
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div id="principal__perfil__perfil__conta__botoes">
                            <div class="div-botoes-center">
                                <form action="funcoes-sql.php" method="POST">
                                    <button class="todos-botoes"><a href="logout.php">Encerrar Sessão</a></button>
                                    
                                    <input type="hidden" name="cID" value="<?php echo $currentID; ?>">
                                    <input type="hidden" name="acao" value="excluirconta">
                                    <button type="submit" class="todos-botoes">
                                        Excluir Conta
                                    </button>
                                </form>
                            </div>
                        </div>
                       
                    </div>
                </div> 
            </section>


            <section class="sections" id="principal__novarequisicao">
                <h2 class="titulosh2">Não encontrou o que precisa?</h2>

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