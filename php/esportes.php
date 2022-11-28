<?php 
include_once('../mockup/mock.php')
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esportes</title>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
    <link rel="stylesheet" href="../css/styles_categoria.css"/>
</head>
<body>
    <header>
        <a href="./page_home.php"><img id="logo" src="../medias/logo/1.png"/> </a>
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
        Esportes
    </div>
    <section class="locacoes">
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://www.joaoalberto.com/wp-content/uploads/2021/08/06/aa-1024x478.jpg');"></div>
            <p class="titulo_item">
                Locação quadra de areia
            </p>
            <p class="descricao_item">
                Aquele volêi de areia
            </p>
            <p class="price">R$55,00 por hora</p>
            <button><a href="./page_produto.php?cod=35" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://www.joaoalberto.com/wp-content/uploads/2021/08/06/o-que-e-paintball-1024x576.jpg');"></div>
            <p class="titulo_item">
                Locação pintball
            </p>
            <p class="descricao_item">
                Espaço para jogar um Pintball
            </p>
            <p class="price">R$85,00 por hora</p>
            <button><a href="./page_produto.php?cod=36" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://opiniaoplay.tv.br/wp-content/uploads/2020/12/Frota-de-karts-de-aluguel1_Kartodromo-San-Marino_Vagner-Ferreira-800x445.jpg');"></div>
            <p class="titulo_item">
                kart veloz
            </p>
            <p class="descricao_item">
                Venha correr de kart
            </p>
            <p class="price">R$120,00 por hora</p>
            <button><a href="./page_produto.php?cod=37" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://cdn.pixabay.com/photo/2018/05/26/19/30/woman-3432069_1280.jpg');"></div>
            <p class="titulo_item">
                Passeio a cavalo
            </p>
            <p class="descricao_item">
                Venha se divertir com a familia em um passeio a cavalo inesquecivel!
            </p>
            <p class="price">R$20,00 por hora</p>
            <button><a href="./page_produto.php?cod=38" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://thumbs.dreamstime.com/z/crian%C3%A7as-que-montam-o-p%C3%B4nei-crian%C3%A7a-no-cavalo-em-montanhas-dos-cumes-114973825.jpg');"></div>
            <p class="titulo_item">
                Passeio de ponei
            </p>
            <p class="descricao_item">
            Venha se divertir com a familia em um passeio de ponei inesquecivel!
            </p>
            <p class="price">R$20,00 por hora</p>
            <button><a href="./page_produto.php?cod=39" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://blogdointercambio.west1.com.br/wp-content/uploads/esportes-radicais-scaled.jpg');"></div>
            <p class="titulo_item">
                Salto de paraquedas
            </p>
            <p class="descricao_item">
                salte de paraquedas hoje mesmo!
            </p>
            <p class="price">R$70</p>
            <button><a href="./page_produto.php?cod=40" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://f.i.uol.com.br/fotografia/2019/09/28/15696969275d8fac9f45156_1569696927_3x2_rt.jpg');"></div>
            <p class="titulo_item">
                Asa delta para locação
            </p>
            <p class="descricao_item">
                alugue uma asa delta maravilhosa por um preço muito bom!
            </p>
            <p class="price">R$70</p>
            <button><a href="./page_produto.php?cod=41" style="color:white;">saiba mais</a></button>
        </div>
        <div class="item_locacoes">
            <div class="img_locacoes" style="background-image: url('https://www.rei.com/dam/rinckenberger_111815_2917_how_to_rappel_lg.jpg');"></div>
            <p class="titulo_item">
                Locação Esportes
            </p>
            <p class="descricao_item">
                equipamento de Rappel
            </p>
            <p class="price">R$400</p>
            <button><a href="./page_produto.php?cod=42" style="color:white;">saiba mais</a></button>
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