<?php

include "db.php";

    $login_user = $_POST["login_user"];
    $password_user = $_POST["password_user"];
    $profile_user = $_POST["profile_user"];
    // $dtnacimento = $_POST["idadeFuncionario"];

    $sql = "INSERT INTO mec_user (login_user, password_user, profile_user) VALUES ('$login_user', '$password_user', '$profile_user')";

    //executar o sql

    if(mysqli_query($conexao, $sql))
    {
        echo "Usuario cadastrado com sucesso!";
        header("Location: index.php");
    }

    else{
        echo "Falha ao cadastrar o usuario!";
    }

    mysqli_close($conexao);

?>