<?php
    include('config.php');
    require_once('funcoes-gerais.php');


    switch ($_REQUEST["acao"]) {
        case 'criarconta':
            $inputNome = $_POST['nome'];
            $inputCPF = $_POST['cpf'];
            $inputDN = $_POST['datanasc'];
            $inputCEP = $_POST['cep'];
            $inputUF = $_POST['uf'];
            $inputTel = $_POST['tel'];
            $inputEmail = $_POST['email'];
            $inputSenha = $_POST['senha'];
            echo "Cadastro com PHP $inputNome $inputEmail";
            
            $novo_user = array('nome'=> $inputNome, 'cpf'=> $inputCPF, 'dn'=> $inputDN, 'cep'=> $inputCEP, 'uf'=> $inputUF, 'tel'=> $inputTel, 'email'=> $inputEmail, 'senha'=> $inputSenha,);
            $resposta = $conn_pdo->prepare(" INSERT INTO todosusuarios (nome,cpf,data_nascimento,cep,uf,telefone,email,senha) VALUES (:nome,:cpf,:dn,:cep,:uf,:tel,:email,:senha) ");
            $resposta->bindParam(':nome', $novo_user['nome'], PDO::PARAM_STR);
            $resposta->bindParam(':cpf', $novo_user['cpf'], PDO::PARAM_STR);
            $resposta->bindParam(':dn', $novo_user['dn'], PDO::PARAM_STR);
            $resposta->bindParam(':cep', $novo_user['cep'], PDO::PARAM_STR);
            $resposta->bindParam(':uf', $novo_user['uf'], PDO::PARAM_STR);
            $resposta->bindParam(':tel', $novo_user['tel'], PDO::PARAM_STR);
            $resposta->bindParam(':email', $novo_user['email'], PDO::PARAM_STR);
            $resposta->bindParam(':senha', $novo_user['senha'], PDO::PARAM_STR);

            $resposta->execute();

            if ($resposta->rowCount()) {
                header("Location: ./page_cadastroconcluido-novoitem.php");
            } 
            else {
                header("Location: ./page_login.php");
            }

            break;

        case 'logar':
            $inputEmail = $_POST['email'];
            $inputSenha = $_POST['senha'];
            echo "Login com $inputEmail e $inputSenha";

            $sql = "SELECT * FROM todosusuarios WHERE email = '$inputEmail' AND senha = '$inputSenha' ";
            //echo $sql;
            $resposta = mysqli_query($conn_sql, $sql);
            $qtdReg = mysqli_num_rows($resposta);

            if ($qtdReg > 0) {
                session_start();
                $row = mysqli_fetch_assoc($resposta);
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];

                header("Location: ./page_home.php");
            } 
            else {
                header("Location: ./page_login.php");
            }

            break;

        case 'excluir':
            #code...
            break;
        case 'cadastraritem':
            $inputTitulo = $_POST['titulo'];
            $inputResumo = $_POST['subtitulo'];
            $inputDetalhes = $_POST['detalhes'];
            $inputCategoria = $_POST['categoria'];
            $inputPreco = $_POST['preco'];
            $inputImagem = $_POST['foto'];
            
            $sql = "INSERT INTO todosprodutos (titulo, resumo, detalhes, categoria, preco, imagem) VALUES ('{$inputTitulo}', '{$inputResumo}', '{$inputDetalhes}', '{$inputCategoria}', '{$inputPreco}', '{$inputImagem}') ";
            $resposta = $conn->query($sql);

            if($resposta==true){
                header("Location: ./page_cadastroconcluido-novoitem.php");
            }else{
                print "<script>alert('Desculpe, tivemos um problema. Tente novamente.');</script>";
                header("Location: ./page_perfil.php");
            }

            break;




        default:
            # code...
            break;
    }



?>