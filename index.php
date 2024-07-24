<?php
session_start();

require_once("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM massivos WHERE email = :email";
    $stmt = $conexao->prepare($sql);
    $stmt->bindParam(":email", $email, PDO::PARAM_STR);

    $stmt->execute();

    if ($stmt->rowCount() === 1) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $row['senha'])) { 
            session_regenerate_id();

            $_SESSION["loggedin"] = true;
            $_SESSION["email"] = $email; 
            
        } else {
            $error = "Usuário ou senha incorretos";
        }
    } else {
        $error = "Usuário ou senha incorretos";
    }
}

if (isset($error)) {
    echo $error;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle massivos</title>
    <link rel="stylesheet" href="<?= $BASE_URL ?>cadras.php">
    <link rel="stylesheet" href="style.css">
    <script>
</script>
</head>
<body>
    <h1>Login</h1>
    <form method="post" action="index.php">
        E-mail: <input type="email" name="email"><br> 
        Senha: <input type="password" name="password" required><br>
        <input class= "Logar" type="submit" value="Logar">
    </form>
    <br>
    <a class= "link" href="cadras.php">Cadrastar</a>
</body>
</html>
