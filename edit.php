<?php
session_start();
require_once "db.php";


    $nome = $_POST["nome_products"];
    $quantidade = $_POST["qtd_products"];
    $tipo = $_POST["type_products"];
    $preco = $_POST["price_products"];
    $id = $_POST["id_products"];
    //$dtnacimento = $_POST["idadeFuncionario"];

    //$sql = "INSERT INTO mec_products (nome_products, qtd_products, type_products, price_products) VALUES ('$nome', '$quantidade', '$tipo', '$preco')";
   $sql = "UPDATE mec_products SET nome_products = '$nome', qtd_products = '$quantidade', type_products = '$tipo', price_products = '$preco' WHERE id_products = '$id'";
   

    //executar o sql

    if(mysqli_query($conexao, $sql)):
        echo 'Produto cadastrado com sucesso!';
        $_SESSION['mensagem'] = "<h4 id='semAcesso'>Produto atualizado com sucesso!</h4>";
        header("Location: painel.php");
    
    else:
        echo 'Falha ao cadastrar o produto!';
        $_SESSION['mensagem'] = "<h4 id='semAcesso'>Falha ao atualizar produto</h4>";
        header("Location: painel.php");
    endif;
    ?>

