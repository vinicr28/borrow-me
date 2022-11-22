<?php
    include('config.php');
    require_once('funcoes-gerais.php');


    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $inputNome = $_POST['nome'];
            $inputCPF = $_POST['cpf'];
            $inputDN = $_POST['datanasc'];
            $inputCEP = $_POST['cep'];
            $inputLogradouro = $_POST['logradouro'];
            $inputBairro = $_POST['bairro'];
            $inputCidade = $_POST['cidade'];
            $inputUF = $_POST['uf'];
            $inputTel = $_POST['tel'];
            $inputEmail = $_POST['email'];
            $inputSenha = $_POST['senha'];
            echo "Cadastro com PHP $inputNome $inputEmail";

            $sql = "INSERT INTO todosusuarios (nome, cpf, data_nascimento, cep, logradouro, bairro, cidade, uf, telefone, email, senha)  VALUES ('{$inputNome}', '{$inputCPF}', '{$inputDN}', '{$inputCEP}', '{$inputLogradouro}', '{$inputBairro}', '{$inputCidade}', '{$inputUF}','{$inputTel}', '{$inputEmail}', '{$inputSenha}')";
            $resposta = $conn->query($sql);

            if($resposta==true){
                header("Location: ./page_cadastroconcluido-usuario.php");
                echo "<script>alert('Cadastro realizado com sucesso!');</script>";
            }else{
                print "<script>alert('Desculpe, tivemos um problema. Tente novamente.');</script>";
                print "<script>location.href='./page_cadastroconcluido-usuario.php';</script>";
            }

            break;

        case 'logar':
            $inputEmail = $_POST['email'];
            $inputSenha = $_POST['senha'];
            echo "Login com $inputEmail e $inputSenha";

            $sql = "SELECT * FROM todosusuarios WHERE email = '$inputEmail' AND senha = '$inputSenha' ";
            //echo $sql;
            $resposta = mysqli_query($conn, $sql);
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
        case 'logar':
            #code...
            break;
        default:
            # code...
            break;
    }



?>