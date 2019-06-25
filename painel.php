<?php
session_start();
include('verifica_login.php');
?>

<!-- <h2>Olá, <?php echo $_SESSION['usuario'];?></h2> -->
<!-- <h2><a href="logout.php">Sair</a></h2> -->

<!-- form action="#" method="post"> -->
    <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" id="nome" name="nome" style="width: 25em" value="">
                <link rel="stylesheet" type="text/css" href="css/padrao.css">
            </div>
    <div class="campo">
        <div class="campo">
            <label>Status</label>
            <label>
                <input type="radio" name="status" value="enable"> Ativo
                <link rel="stylesheet" type="text/css" href="css/padrao.css">
            </label>
            <label>
                <input type="radio" name="status" value="disable"> Desativado
                <link rel="stylesheet" type="text/css" href="css/padrao.css">
            </label>
        </div>
        <div class="campo">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" style="width: 20em" value="">
        </div>
        <div class="campo">
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" style="width: 10em" value="">
        </div>

        <div class="campo">
            <label for="telefone">Data de Validade</label>
            <input type="text" id="datavalidade" name="datavalidade" style="width: 10em" value="">
        </div>
        <div class="campo">
        <div class="campo">
            <label for="telefone">Data Inicial</label>
            <input type="text" id="datainicial" name="datainicial" style="width: 10em" value="">
        </div>
        <div class="campo">
        <button type="submit" name="submit">Enviar</button>
    
</form>