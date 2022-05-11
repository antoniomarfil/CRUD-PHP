<?php include_once "header.php" ?>




<h2>Cadastro de usuário: </h2><br>

<form action="cadastroUser.php" method="post">
    <div class="form-group">
        <label for="login_user">Login: </label>
        <input type="text" name="login_user" id="login_user" placeholder="Digite o login desejado" class="form-control">
    </div>
    <div class="form-group">
        <label for="password_user">Senha: </label>
        <input type="password" name="password_user" id="password_user" class="form-control" placeholder="Digite a senha desejada">
    </div>
    <div class="form-group">
        <label for="profile_user">Perfil de Acesso:</label>
        <select name="profile_user" id="profile_user" class="form-control">
            <option value="profile_admin">Administrador</option>
            <option value="profile_client">Cliente</option>
        </select>
    </div>

    <input type="submit" value="Cadastrar" class="btn btn-success">

</form>
<br>
<?php include_once "footer.php"?>