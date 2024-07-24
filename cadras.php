<?php

include_once("db.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $sobrenome = $_POST["sobrenome"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $password = password_hash($password, PASSWORD_DEFAULT);
   
    try {
        $sql = "INSERT INTO massivos (nome, sobrenome, email, senha) VALUES (?, ?, ?, ?)
                ON DUPLICATE KEY UPDATE nome = VALUES(nome), email = VALUES(email), senha = VALUES(senha)";

        $stmt = $conexao->prepare($sql);

        $stmt->bindParam(1, $name, PDO::PARAM_STR);
        $stmt->bindParam(2, $sobrenome, PDO::PARAM_STR);
        $stmt->bindParam(3, $email, PDO::PARAM_STR);
        $stmt->bindParam(4, $password, PDO::PARAM_STR);

        $stmt->execute();

        echo "Cadastro realizado com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao cadastrar: " . $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Massivo</title>
    <link rel="stylesheet" href="styleca.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <h1>Cadastro</h1>
    <form method="post" action="cadras.php">
        Nome: <input type="text" name="name"><br>
        Sobrenome: <input type="text" name="sobrenome"><br>
        E-mail: <input type="email" name="email"><br>
        Senha: <input type="password" name="password" required><br>
        <input class = 'cadrastar'type="submit" value="Cadastrar">
    </form>
    <a class= "link" href="index.php">Login</a>
</body>
</html>
