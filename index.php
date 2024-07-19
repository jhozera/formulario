<?php

    include_once("db.php");
    
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];
       
        try {
            $sql = "INSERT INTO massivos (email, senha) VALUES (?, ?)
                    ON DUPLICATE KEY UPDATE email = VALUES(email), senha = VALUES(senha)";
    
            $stmt = $conexao->prepare($sql);
    
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->bindParam(2, $password, PDO::PARAM_STR);
    
            $stmt->execute();
    
            echo "logado com sucesso!";
        } catch (PDOException $e) {
            echo "Erro ao logar: " . $e->getMessage();
        }
    }
    
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle massivos</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>style.css">
    <link rel="stylesheet" href="<?= $BASE_URL ?>cadras.php">
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="index.php">
        E-mail: <input type="email" name="email"><br> 
        Senha: <input type="password" name="password" required><br>
        <input type="submit" value="Logar">
    </form>
</body>
</html>
