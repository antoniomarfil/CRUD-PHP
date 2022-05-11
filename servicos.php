<?php include_once "header.php" ?>

<table class="table" id="table-servicos">
    <!-- <thead id="proff">
            <th><a href="formCadastro.php">CADASTRAR PRODUTOS</th>
            <th><a href="listar_produtos.php">LISTAR PRODUTOS</th>
            <th><a href="index.php">PÁGINA INICIAL</th>
        </thead> -->
    <thead id="title-servicos">
        <th></th>
        <th>SERVIÇOS</th>
        <th></th>
    </thead>
    <tbody id="table-contato">

        <tr class="nome-servicos">
            <td>Troca de Óleo</td>
            <td>Funilaria</td>
            <td>Manutenção Elétrica</td>
        </tr>
        <tr>
            <td><img src="imgs/imgs-servicos/trocaOleo.png" class="fotoContato"></td>
            <td><img src="imgs/imgs-servicos/funilaria.png" class="fotoContato"></td>
            <td><img src="imgs/imgs-servicos/manutencaoEletrica.png" class="fotoContato"></td>
        </tr>
        <tr class="nome-servicos">
            <td>Manutenção do Motor</td>
            <td>Suspenção</td>
            <td>Limpeza em geral</td>
        </tr>
        <tr>
            <td><img src="imgs/imgs-servicos/motor.png" class="fotoContato"></td>
            <td><img src="imgs/imgs-servicos/suspensao.png" class="fotoContato"></td>
            <td><img src="imgs/imgs-servicos/limpezaCarro.png" class="fotoContato"></td>
        </tr>
    </tbody>
</table>
<?php include_once "footer.php" ?>