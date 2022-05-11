<?php

include_once 'db.php';
include_once 'header.php';

$id = $_GET['id_products'];
$sql = "SELECT * FROM mec_products WHERE id_products = '$id'";
$result = mysqli_query($conexao, $sql);
$data = mysqli_fetch_array($result);
?>

<h2 class="alinha-subtitle">Atulização de Produtos</h2>

<form action="edit.php" method="post">

    <div class="form-group">
        <label for="id_products">Id do Produto: </label>
        <input type="number" name="id_products" class="form-control" value="<?php echo $data['id_products']; ?>">
    </div>

    <div class="form-group">
        <label for="nome_products">Nome do produto: </label>
        <input type="text" name="nome_products" class="form-control" id="nome_products" value="<?php echo $data['nome_products']; ?>">
    </div>

    <div class="form-group">
        <label for="qtd_products">Quantidade: </label>
        <input type="number" name="qtd_products" class="form-control" id="qtd_products" value="<?php echo $data['qtd_products']; ?>">
    </div>

    <div class="form-group">
        <label for="price_products">Preço do Produto: </label>
        <input type="number" name="price_products" class="form-control" id="price_products" value="<?php echo $data['price_products']; ?>">
    </div>

    <div class="form-group">
        <label for="type_products">Tipo do produto: </label>
        <select name="type_products" id="type_products">
            <option value="Ferramenta">Ferramenta</option>
            <option value="Peça">Peça</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success" name="btnEnviar">Atualizar</button>
    </div>
</form>