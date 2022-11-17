<?php
    include('config.php');
    require_once('funcoes-gerais.php');


    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $inputnome = $_POST['nome'];
            $inputCPF = $_POST['cpf'];
            $inputDN = $_POST['datanasc'];
            $inputtel = $_POST['tel'];
            $inputemail = $_POST['email'];
            $inputsenha = $_POST['senha'];
            echo "Cadastro com PHP $inputnome $inputemail";

            $sql = "INSERT INTO todosusuarios (nome, cpf, data_nascimento, telefone, email, senha)  VALUES ('{$inputnome}', '{$inputCPF}', '{$inputDN}', '{$inputtel}', '{$inputemail}', '{$inputsenha}')";
            $resposta = $conn->query($sql);

            if($resposta==true){
                print "<script>location.href='./page_cadastroconcluido-usuario.php';</script>";
                echo "<script>alert('Cadastro realizado com sucesso!');</script>";
            }else{
                print "<script>alert('Desculpe, tivemos um problema. Tente novamente.');</script>";
                print "<script>location.href='./page_cadastroconcluido-usuario.php';</script>";
            }

            break;

        case 'editar':
            #code...
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