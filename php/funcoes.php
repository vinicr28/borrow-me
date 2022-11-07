<?php



function fazer_login() {
    
    $inputemail = $_GET['email'];
    $inputsenha = $_GET['senha'];
    echo "Teste Botão Entrar Clicado";
    header('Location: /php/page_home.php');
     
}

function criar_conta() {
    $inputnome = $_GET['nome'];
    $inputemail = $_GET['email'];
    $inputtel = $_GET['tel'];
    $inputsenha = $_GET['senha'];
    echo "Cadastro com PHP $inputnome $inputemail";

}



?>
