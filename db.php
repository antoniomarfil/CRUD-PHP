<?php
    //conxao direta
    //$conexao = mysqli_connect("localhost", "root", "", "sistemarh")


    //conexao com veriaveis para melhor maniplação de dados
    $server = "localhost";
    $user = "root";
    $password = "";
    $database = "sistemarh"; 
    //colocar sistema_mec para colocar o DB de forma correta pra entrega

    $conexao = mysqli_connect($server, $user, $password, $database);

    if(mysqli_connect_errno()){
        exit("Erro ao realizar a conexao com o Database");
    }

    
?>