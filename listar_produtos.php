<?php
include_once 'db.php';
$sql = "SELECT * FROM mec_products";
$result = mysqli_query($conexao, $sql);
include_once 'header.php';
?>
<!-- 
<ul>
    <li><a href="painel.php">Página Anterior</a></li>
</ul> -->
<h2 class="alinha-subtitle">Lista de Produtos</h2>

<table class="table">
    <thead>
        <th>Id: </th>
        <th>Nome da peça: </th>
        <th>Quantidade: </th>
        <th>Tipo(Ferramenta/Peça): </th>
        <th>Preço: </th>
    </thead>
    <tbody>
        <?php
        if (mysqli_num_rows($result) > 0) :
            while ($data = mysqli_fetch_array($result)) :
        ?>
                <tr>
                    <td><?php echo $data['id_products']; ?></td>
                    <td><?php echo $data['nome_products']; ?></td>
                    <td><?php echo $data['qtd_products']; ?></td>
                    <td><?php echo $data['type_products']; ?></td>
                    <td><?php echo $data['price_products']; ?></td>
                    <td><a class="btn btn-danger" href="delete.php?id_products=<?php echo $data['id_products'] ?>">Excluir</a></td>
                    <td><a class="btn btn-warning" href="update2.php?id_products=<?php echo $data['id_products'] ?>">Update</a></td>
                <?php
            endwhile;
        else :
                ?>
            <?php
        endif;
            ?>
    </tbody>
    
    <?php
    
    if (isset($_SESSION['mensagem'])) {
        $msg = $_SESSION['mensagem'];

        echo '<p>' . $msg . '</p>';
        unset($_SESSION['mensagem']);
    }

    ?>
</table>
    
         <h4 style="text-align: initial;"><a href="painel.php">Voltar para o Menu</a></h4>
   

<?php include_once "footer.php" ?>