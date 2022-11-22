<?php
include('config.php');
require_once('funcoes-sql.php');

function criar_conta() {
   
}


function fazer_login() {
    
    $inputemail = $_GET['email'];
    $inputsenha = $_GET['senha'];
    echo "<pre>Teste Botão Entrar Clicado</pre>";
    if ($inputemail == 'teste@email.com') {
        header('Location: /php/page_home.php');
    } else {
        //header('Location: /php/page_login.php');
        echo 'Login Inválido';
    };
     
}

function carregar_page_produto($cod_produto) {
    $id_produto = $cod_produto;

    return 
        include_once('page_header.php');
        include_once($id_produto);
        include_once('footer.php');
    
}





?>
