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
                header("Location: ./page_cadastroconcluido-usuario.php");
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
            $resposta = mysqli_query($conn_sql, $sql);
            $qtdReg = mysqli_num_rows($resposta);

            if ($qtdReg > 0) {
                session_start();
                $row = mysqli_fetch_assoc($resposta);
                $_SESSION['id'] = $row['id'];
                $_SESSION['nome'] = $row['nome'];
                $_SESSION['cpf'] = $row['cpf'];
                $_SESSION['dn'] = $row['data_nascimento'];
                $_SESSION['cep'] = $row['cep'];
                $_SESSION['uf'] = $row['uf'];
                $_SESSION['tel'] = $row['telefone'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['senha'] = $row['senha'];
                $_SESSION['descricao'] = $row['about_me'];

                header("Location: ./page_home.php");
            } 
            else {
                header("Location: ./page_login.php");
            }

            break;
        


        case 'editar':
            $currentID = $_POST['cID'];
            $inputAbout = $_POST['aboutme'];
            $inputNome = $_POST['nome'];
            $inputCPF = $_POST['cpf'];
            $inputDN = $_POST['datanasc'];
            $inputCEP = $_POST['cep'];
            $inputUF = $_POST['uf'];
            $inputTel = $_POST['tel'];
            $inputEmail = $_POST['email'];
            $inputSenha = $_POST['senha'];
            echo "Atualização com PHP $inputNome $inputEmail";

            $sql = "UPDATE todosusuarios SET
                        nome='{$inputNome}',
                        about_me='{$inputAbout}',
                        cpf='{$inputCPF}',
                        data_nascimento='{$inputDN}',
                        cep='{$inputCEP}',
                        uf='{$inputUF}',
                        telefone='{$inputTel}',
                        email='{$inputEmail}',
                        senha='{$inputSenha}'
                    WHERE 
                        id=".$currentID;
            $resposta = $conn_sql->query($sql);

            if($resposta==true){
                echo 'Teste com resposta TRUE';
                header("Location: ./page_edicaoconcluida-usuario.php");
            }else{
                echo 'Teste com resposta FALSE';
                print "<script>alert('Desculpe, tivemos um problema. Tente novamente.');</script>";
                header("Location: ./page_perfil.php");
            }
            break;
        
        

        case 'excluirconta':
            $currentID = $_POST['cID'];
            $sql = "DELETE FROM todosusuarios WHERE id=".$currentID;
            $resposta = $conn_sql->query($sql);

            if($resposta==true){
                echo 'Teste com resposta TRUE';
                header("Location: ../index.php");
            }else{
                echo 'Teste com resposta FALSE';
                print "<script>alert('Desculpe, tivemos um problema. Tente novamente.');</script>";
                header("Location: ./page_perfil.php");
            }
            break;
        


        case 'cadastraritem':
            $inputTitulo = $_POST['titulo'];
            $inputResumo = $_POST['subtitulo'];
            $inputDetalhes = $_POST['detalhes'];
            $inputCategoria = $_POST['categoria'];
            $inputPreco = $_POST['preco'];
            $inputImagem = $_POST['foto'];
            echo $inputTitulo;
            
            $sql = "INSERT INTO todosprodutos (titulo, resumo, detalhes, categoria, preco, imagem) VALUES ('{$inputTitulo}', '{$inputResumo}', '{$inputDetalhes}', '{$inputCategoria}', '{$inputPreco}', '{$inputImagem}') ";
            $resposta = $conn_sql->query($sql);

            if($resposta==true){
                echo 'Teste com resposta TRUE';
                header("Location: ./page_cadastroconcluido-novoitem.php");
            }else{
                echo 'Teste com resposta FALSE';
                print "<script>alert('Desculpe, tivemos um problema. Tente novamente.');</script>";
                header("Location: ./page_perfil.php");
            }
            break;



        default:
            break;
    }



?>