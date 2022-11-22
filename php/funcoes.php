<?php



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

function criar_conta() {
    $inputnome = $_GET['nome'];
    $inputemail = $_GET['email'];
    $inputtel = $_GET['tel'];
    $inputsenha = $_GET['senha'];
    echo "Cadastro com PHP $inputnome $inputemail";

}

function carregar_page_produto($cod_produto) {
    $id_produto = $cod_produto;

    return 
        include_once('page_header.php');
        include_once($id_produto);
        include_once('footer.php');
    
}

?>
