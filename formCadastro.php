<?php include_once "header.php" ?>


<!-- <ul>
    <li><a href="painel.php">Página Anterior</a></li>
</ul>
 -->
<h2>Cadastro de produtos</h2>

<form action="cadastrar.php" method="post">

    <div class="form-group">
        <label for="nome_products">Nome do produto: </label>
        <input type="text" name="nome_products" class="form-control" id="nome_products" placeholder="Digite o nome do produto:">
    </div>

    <div class="form-group">
        <label for="qtd_products">Quantidade: </label>
        <input type="number" name="qtd_products" class="form-control" id="qtd_products" placeholder="Quantidade do produto:">
    </div>

    <div class="form-group">
        <label for="price_products">Preço do Produto: </label>
        <input type="number" name="price_products" class="form-control" id="price_products" placeholder="Preço do produto:">
    </div>

    <div class="form-group">
        <label for="type_products">Tipo do produto: </label>
        <select name="type_products" id="type_products">
            <option value="Ferramenta">Ferramenta</option>
            <option value="Peça">Peça</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary" name="btnEnviar">Enviar</button>
    </div>
</form>
















<?php include_once "footer.php" ?>