<?php
    
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'borrowme');

    # Cria conexão
    $conn_sql = new MySQLi(HOST,USER,PASS,BASE);
    $conn_pdo = new PDO('mysql:host=localhost;dbname=borrowme',USER,PASS);
    

    #Verifica conexão
    if (!$conn_sql) {
        die("Script de Funções: A conexão SQL falhou: " . mysqli_connect_error());
    } 
        print "<script>console.log('Tudo certo com a conexão de SQL');</script>";
   
        if (!$conn_pdo) {
        die("Script de Funções: A conexão PDO falhou!!!");
    }
        print "<script>console.log('Tudo certo com a conexão de PDO');</script>";


?>