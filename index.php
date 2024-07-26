<?php


if (isset($_POST['email']) && isset($_POST['senha'])) {
    if (strlen($_POST['email']) == 0) {
        echo "Insira o email correto";
    } elseif (strlen($_POST['senha']) == 0) {
        echo "Insira a senha correta";
    } else {
        $consulta = "SELECT * FROM massivos WHERE email = :email AND senha = :senha";

        
        $pdo = new PDO('mysql:host=localhost;dbname=pro', 'root', '');
        $stmt = $pdo->prepare($consulta);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':senha', $_POST['senha']);
        $stmt->execute();

        
        if ($stmt->rowCount() > 0) {
            
            if (!isset($_SESSION)) {
                session_start();
            }

            
            $_SESSION['email'] = $_POST['email'];

           
            header('Location: pagina.php');
            exit;
        } else {
            echo "Email ou senha incorretos";
        }
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
    <h1>Login</h1>
    <form method="post" action="index.php">
        E-mail: <input type="email" name="email"><br> 
        Senha: <input type="password" name="senha" required><br>
        <input class="Logar" type="submit" value="Logar">
    </form>
    <br>
    <a class="link" href="cadras.php">Cadrastar</a>
</body>
</html>