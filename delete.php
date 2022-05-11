
<?php

require_once 'db.php';
session_start();

if (isset($_GET['id_products'])) :

    $id = mysqli_escape_string($conexao, $_GET['id_products']);

    $sql = "DELETE FROM mec_products WHERE id_products = '$id'";

    if (mysqli_query($conexao, $sql)) :
        $_SESSION['mensagem'] = "Produto deletado com sucesso!";
        $_SESSION['mensagem'] = "<h4 id='semAcesso'>Cliente deletado com sucesso!</h4>";
        header('Location: painel.php');
    else :
        $_SESSION['mensagem'] = "Erro ao deletar.";
        $_SESSION['mensagem'] = "<h4 id='semAcesso'>Produto deletado com sucesso!</h4>";
        header('Location: painel.php');
    endif;
endif;



/* if(mysqli_query($conexao, $sql)):
    echo 'Produto cadastrado com sucesso!';
    $_SESSION['mensagem'] = "<h4 id='semAcesso'>Produto atualizado com sucesso!</h4>";
    header("Location: listar_produtos.php");

else:
    echo 'Falha ao cadastrar o produto!';
    $_SESSION['mensagem'] = "<h4 id='semAcesso'>Falha ao atualizar produto</h4>";
    header("Location: index.php");
endif; */
