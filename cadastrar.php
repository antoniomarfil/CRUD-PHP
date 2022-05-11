<?php

include "db.php";
    session_start();
    $nome = $_POST["nome_products"];
    $quantidade = $_POST["qtd_products"];
    $tipo = $_POST["type_products"];
    $preco = $_POST["price_products"];
    //$dtnacimento = $_POST["idadeFuncionario"];

    $sql = "INSERT INTO mec_products (nome_products, qtd_products, type_products, price_products) VALUES ('$nome', '$quantidade', '$tipo', '$preco')";

    //executar o sql

   /*  if(mysqli_query($conexao, $sql))
    {
        echo "Produto cadastrado com sucesso!";
        header("Location: painel.php");
    }

    else{
        echo "Falha ao cadastrar o produto!";
    } */

    if (mysqli_query($conexao, $sql)) :
        $_SESSION['mensagem'] = "Produto cadastrado com sucesso!";
        $_SESSION['mensagem'] = "<h4 id='semAcesso'>Produto cadastrado com sucesso!</h4>";
        header('Location: painel.php');
    else :
        $_SESSION['mensagem'] = "Erro ao deletar.";
        $_SESSION['mensagem'] = "<h4 id='semAcesso'>Falha ao cadastrar produto!</h4>";
        header('Location: painel.php');
    endif;

    mysqli_close($conexao);
