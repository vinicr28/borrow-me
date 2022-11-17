<?php
    #borrowme.cabcaqzt9ljg.us-east-1.rds.amazonaws.com
    define('HOST', 'borrowme.cabcaqzt9ljg.us-east-1.rds.amazonaws.com');
    define('USER', 'admin');
    define('PASS', '130rr0w,M3');
    define('BASE', 'borrow_me');

    # Cria conexão
    $conn = new MySQLi(HOST,USER,PASS,BASE);

    #Verifica conexão
    if (!$conn) {
        die("Script de Funções: A conexão falhou: " . mysqli_connect_error());
    }
        echo "Script de Funções: Conectado com sucesso!";


?>