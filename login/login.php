
<?php

include_once('mys.php');

if(isset($_POST['email'])) {

  
    $email = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM massivos WHERE email = '$email' LIMIT 1";
        $sql_exec = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $usuario = $sql_exec->fetch_assoc();
        if(password_verify($senha, $usuario['senha'])) {
            header('Location: ../web/pagina.php');
        } else {
            echo "";
        }
        if(!isset($_SESSION)) {
            session_start();
        }      
    }   
 
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Controle massivos</title>
     <link rel="stylesheet" href="style.css">
 </head>
 <body>
     <h1>TRC</h1>
     <form method="post" action="">
         E-mail: <input type="email" name="email" required><br> 
         Senha: <input type="password" name="senha" required><br>
         <input class="Logar" type="submit" value="Logar">
     </form>
     <br>
     <a class="link" href="../cadrasto/cadras.php">Cadastrar</a>
 </body>
 </html>
 