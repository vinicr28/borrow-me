<?php
    include('config.php');
    require_once('funcoes-gerais.php');
    require_once("Menssage.php");

    $message = new Menssage($BASE_URL);
    $flassMessage = $message->getMessage();

    if (!empty($flassMessage["msg"])) {
        $message->clearMessage();
    } 


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
            $resposta->bindParam(':cpf', $novo_user['cpf'], PDO::PARAM_INT);
            $resposta->bindParam(':dn', $novo_user['dn']);
            $resposta->bindParam(':cep', $novo_user['cep'], PDO::PARAM_INT);
            $resposta->bindParam(':uf', $novo_user['uf'], PDO::PARAM_STR);
            $resposta->bindParam(':tel', $novo_user['tel'], PDO::PARAM_INT);
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
                echo "<div align='center'>
                <h1>Usuario e/ou senha invalido(s)!</h1>
                </div>";
                echo "<meta http-equiv='refresh' content='2;URL=page_login.php'>";
                
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
            $currentID = $_POST['cID'];
            $inputTitulo = $_POST['titulo'];
            $inputResumo = $_POST['subtitulo'];
            $inputDetalhes = $_POST['detalhes'];
            $inputCategoria = $_POST['categoria'];
            $inputPreco = $_POST['preco'];
            $inputImagem = $_POST['foto'];
            echo $inputTitulo;
            
            $sql = "INSERT INTO todosprodutos (titulo, resumo, detalhes, categoria, preco, imagem, id_proprietario) VALUES ('{$inputTitulo}', '{$inputResumo}', '{$inputDetalhes}', '{$inputCategoria}', '{$inputPreco}', '{$inputImagem}', '{$currentID}' ) ";
            echo $currentID;
            echo $sql;
            $resposta = $conn_sql->query($sql);
            echo $resposta;

            if($resposta==true){
                echo 'Teste com resposta TRUE';
                header("Location: ./page_cadastroconcluido-novoitem.php");
            }else{
                echo 'Teste com resposta FALSE';
                print "<script>alert('Desculpe, tivemos um problema. Tente novamente.');</script>";
                header("Location: ./page_perfil.php");
            }
            break;

        
        case 'visualizaranuncio':
            $currentCOD = $_GET['cCOD'];
            echo "Função Visualizar Anúncio";
            echo $currentCOD;
            echo "Fim Impressão";

            $sql = "SELECT * FROM todosprodutos WHERE cod = '$currentCOD' ";
            $resposta = $conn_sql->query($sql);
            $qtdReg = mysqli_num_rows($resposta);
            //$row = $resposta->fetch_object();
            
            if ($qtdReg > 0) {
                $row = mysqli_fetch_assoc($resposta);
                var_dump($row);
                $cod = $row['cod'];
                $titulo = $row['titulo'];
                $descricao = $row['resumo'];
                $detalhes = $row['detalhes'];
                $categoria = $row['categoria'];
                $preco = $row['preco'];
                $imagem = $row['imagem'];
                $idProprietario = $row['id_proprietario'];
                
                $currentCOD = $row;
                //include './page_produto.php)';
                header("Location: ./page_produto.php");
                require "./page_produto.php";
            } 
            else {
                //header("Location: ./page_home.php");
            }

            break;



        case 'prepararemprestimo':
            $currentCOD = $_POST['cCOD'];
            $recebidoTitulo = $_POST['titulo'];
            $recebidoSubtitulo = $_POST['subtitulo'];
            $recebidoDetalhes = $_POST['detalhes'];
            $recebidoPreco = $_POST['preco'];
           
            echo "Prepara Empréstimo";
            echo $currentCOD;
            echo $recebidoTitulo;
            
            header("Location: ./page_solicitar-emprestimo.php");





        case 'registraremprestimo':
            $currentCOD = $_POST['cCOD'];
            $dtRetirada = $_POST['dataretirada'];
            $dtDevolucao = $_POST['dtdevolucao'];
            $idSolicitante = $_POST['cID'];
            echo $currentCOD;

            $sql = "SELECT * FROM todosprodutos WHERE cod = '$currentCOD' ";
            $resposta = $conn_sql->query($sql);
            $item = mysqli_fetch_assoc($resposta);
            var_dump($item);

            $idProprietario = $item['id_proprietario'];
            

            $sql = "INSERT INTO todosemprestimos (id_proprietario, id_solicitante, cod_produto, dt_retirada, dt_devolucao) VALUES ('{$idProprietario}', '{$idSolicitante}', '{$currentCOD}', '{$dtRetirada}', '{$dtDevolucao}' ) ";
            $resposta = $conn_sql->query($sql);


            if($resposta==true){
                echo 'Teste com resposta TRUE';
                header("Location: page_requisicaoconcluida-emprestimo.php");
            }else{
                echo 'Teste com resposta FALSE';
                print "<script>alert('Desculpe, tivemos um problema. Tente novamente.');</script>";
                header("Location: ./page_perfil.php");
            }




        default:
            break;
    }



?>