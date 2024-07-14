<?php
  require_once("header.php");
  require_once("message.php");
  require_once("user.php");
?>
  <html>
    <head>
      <title>Login</title>
    </head>
    <link rel="stylesheet" href="<?= $BASE_URL ?>style.css">
    <body>
    <form method="POST" action="cadastro.php">
    <div class="form-group">
        <label for="login">Login:</label>
        <input type="text" id="login" name="login">
    </div>
    <div class="form-group">
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha">
    </div>
    <div class="form-group">
        <button type="submit" name="entrar">Entrar</button>
        <button tyoe="submit" name= "Cadraste-se"</button> 
        <a href="cadrasto.php">Cadraste-se</a>
    </div>
    <div class="form-group">
        <label for="nome">nome:</label>
        <input type="nome" id="nome" name="nome">
    <div class="form-group">
        <label for="sobrenome">sobrenome:</label>
        <input type="sobrenome" id="lastname" name="sobrenome">
    <div class="form-group">
        <label for="email">email:</label>
        <input type="email" id="email" name="email">
    <div class="form-group">
        <label for="crie uma senha">Senha:</label>
        <input type="password" id="crie uma senha" name="crie uma senha">
    </div>        
</form>
</body>
</html>