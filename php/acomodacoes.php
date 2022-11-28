<?php 
include_once('../mockup/mock.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acomodações</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="stylesheet" href="../css/styles_categoria.css"/>
</head>
<body>
    <header>
        <a href="./page_home.php"><img id="logo" src="../medias/logo/1.png"/></a>
        <nav class="nav_menu">
            <ul class="lista_menu">
                 <li class="menu home"><a href="./page_home.php">Home</a></li>
                 <li class="menu usando"><a href="./page_perfil.php">Perfil</a></li>
                <li class="menu suporte">suporte</li>
                <li class="menu blog">Blog</li>
            </ul>
        </nav>
    </header>
    <div class="text_locacoes">
        Acomodações
    </div>
    <section class="locacoes">
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('http://boletimjuridico.publicacoesonline.com.br/wp-content/uploads/2021/02/apartamento.jpg');"></div>
            <p class="titulo_item">
                Apartamento Mobiliado
            </p>
            <p class="descricao_item">
                Lindo apartamento no Centro de Santa Catarina
            </p>
            <p class="price">diária a partir de R$89,00</p>
            <button><a href="./page_produto.php?cod=43" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://public-images.monthly.cloud/images/component-payloads/w5tlocccpc.jpg');"></div>
            <p class="titulo_item">
                Apartamento Mobiliado
            </p>
            <p class="descricao_item">
                Lindo apartamento no Centro de Curitiba/Paraná
            </p>
            <p class="price">diária a partir de R$70,00</p>
            <button><a href="./page_produto.php?cod=44" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('http://www.infocenterhost2.com.br/crm/fotosimovel/277559/91981832-apartamento-curitiba-prado-velho.jpg');"></div>
            <p class="titulo_item">
                Apartamento Mobiliado
            </p>
            <p class="descricao_item">
                Lindo apartamento no Centro de Porto Alegre
            </p>
            <p class="price">diária a partir de R$65,00</p>
            <button><a href="./page_produto.php?cod=45" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://cdn.vistahost.com.br/michelfr20247/vista.imobi/fotos/161/i20mWZ_1615edf81710e7f1.jpg');"></div>
            <p class="titulo_item">
                Apartamento Mobiliado
            </p>
            <p class="descricao_item">
                Lindo apartamento em Vila Mariana/São Paulo
            </p>
            <p class="price">diária a partir de R$110,00</p>
            <button><a href="./page_produto.php?cod=46" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://betaimages.lopes.com.br/realestate/med/REO599960/09D0A4961C372B797A1113AA17040391.JPEG');"></div>
            <p class="titulo_item">
                Apartamento Mobiliado
            </p>
            <p class="descricao_item">
                Lindo apartamento no Centro de João Pessoa/Paraíba
            </p>
            <p class="price">diária a partir de R$135,00</p>
            <button><a href="./page_produto.php?cod=47" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://cdn.newcore.com.br/multimedia/apartamento-guilhermina-3-quartos-9328e192ace84c21982f23176bbdb006.jpeg');"></div>
            <p class="titulo_item">
                Apartamento Mobiliado
            </p>
            <p class="descricao_item">
                Lindo apartamento de frente para o mar Copacabana/Rio de Janeiro
            </p>
            <p class="price">diária a partir de R$160,00</p>
            <button><a href="./page_produto.php?cod=48" style="color:white;">saiba mais</a></button>
        </div>
    </section>
    <footer>
        <img id="logo_footer" src="../medias/logo/1.png"/>
        <div>
            <span>todos os direitos reservados ©</span>
            <span>desenvolvido por: Equipe 128 Turma 4</span>
        </div>
    </footer>
</body>
</html>