<?php

if(isset($_POST['submit'])) {

    Include_once("db.php");

    $nome =$_POST['nome'];
    $sobrenome =$_POST['sobrenome'];
    $email =$_POST['email'];
    $senha =$_POST['senha'];
  
   $result = mysqli_query($conexao, "INSERT INTO massivos(nome,sobrenome,email,senha) VALUES ($nome, $sobrenome,$email,$senha)");
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?= $BASE_URL ?>style.css">
    </head>
        <body>
        <div class="logo">
            <title>Controle massivos</title>
        <div class="form-group">
            <label for = "login">login</label>
            <input type="text" id="login" name="login">
        </div>
        <div class="form-group">
            <label for = "senha" >senha</label>
            <input type="password" id="senha" name="senha">
        </div>
        <div class="form-group">
            <button type="submit" name="Entrar">Entrar</button>
            <button type="submit" name="Cadrastar">Cadrastar</button>
        </div>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome">
            <label for="email">Email</label>
            <input type="text" id="email" name="email">
            <label for="senha">Crie uma senha</label>
            <input type="password" id="senha" name="senha">
        </div>    
    </body>
</html>