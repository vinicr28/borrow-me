<?php
    
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '0000');
    define('BASE', 'borrowme');

    # Cria conexão
    $conn_sql = new MySQLi(HOST,USER,PASS,BASE);
    $conn_pdo = new PDO('mysql:host=localhost;dbname=borrowme',USER,PASS);
    

    #Verifica conexão
    if (!$conn_sql) {
        die("Script de Funções: A conexão SQL falhou: " . mysqli_connect_error());
    }
        echo "Script de Funções: SQL com sucesso!";
   
        if (!$conn_pdo) {
        die("Script de Funções: A conexão PDO falhou!!!");
    }
        echo "Script de Funções: PDO com sucesso!";

    // define();
    // $servername = "localhost";
    //         $username = "root";
    //         $password = "0000";
    //         $tabela = "todosprodutos";
?>