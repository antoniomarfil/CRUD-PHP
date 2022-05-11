<?php
    //incluindo arquivo de conexao com o BD
    include_once "db.php";
    //inicio da sessao
    session_start();
    //recuperando dados do form
    $login_user = $_POST["login_user"];
    $password_user = $_POST["password_user"];
    //$profile_user = $_POST["profile_user"];

    //verifica se os campos estao vazios

    if(empty($login_user)){
        $_SESSION['mensagem'] = "<h4 id='semAcesso'>Preencha o campo Login!</h4>";
        header("Location: index.php");
    }

    elseif(empty($password_user)){
        $_SESSION['mensagem'] = "<h4 id='semAcesso'>Preencha o campo Senha!</h4>";
        header("Location: index.php");
    }
    else{

        //sql para consulta de user
        $sql = "SELECT * FROM mec_user WHERE login_user = '$login_user' AND password_user = '$password_user'";
        //Recupera dados do banco
        $resultado = mysqli_query($conexao, $sql);
        //manipula retorno com um array associativo
        $dados = mysqli_fetch_assoc($resultado);

        //validar login e senha com retorno do BD

        if($dados['login_user'] == $login_user and $dados['password_user'] == $password_user){
            //Cria um array com os dados do user
            $usuario = array("login" =>$dados['login_user'], "senha"=> $dados['password_user'], "perfil"=> $dados['profile_user']);

            //armazena array de user em uma sessao

            $_SESSION['usuario'] = $usuario;

            //redirecionar para a pagina painel.php

            header("Location: painel.php");
        }
        else{
            //criar uma sessão para exibir uma mensagem de erro
            $_SESSION['mensagem'] = "<h4 id='semAcesso'>Login ou senha inválidos!</h4>";
            header("Location: index.php");            
        }
    }
