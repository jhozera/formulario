<?php

session_start();

try {
    $conexao = new PDO('mysql:host=localhost;dbname=pro', 'root', '');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Erro ao conectar ao banco de dados: ' . $e->getMessage();
    exit;
}

if (isset($_POST['email'], $_POST['senha'])) {
    $email = strtolower($_POST['email']);
    $senha = $_POST['senha'];

    $consulta = "SELECT email, senha FROM massivos WHERE email = :email";
    $stmt = $conexao->prepare($consulta);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $resultado = $stmt->fetch();

    if ($resultado) {
        $hashed_senha_from_db = $resultado["senha"];
        if (password_verify($senha, $hashed_senha_from_db)) {
            $_SESSION['email'] = $email;
            echo "logado com sucesso";
        } else {
            echo "senha incorreta";
        }
    } else {
        echo "email não encontrado";
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