<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'borrowme');

    # Cria conexão
    $conn = new MySQLi(HOST,USER,PASS,BASE);

    #Verifica conexão
    if (!$conn) {
        die("Script de Funções: A conexão falhou: " . mysqli_connect_error());
    }
        echo "Script de Funções: Conectado com sucesso!";


?>