<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pro";

$conexao = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conexao->connect_error) {
    die("FALHA" . $conexao->connect_error);
} else {
    echo "SUCESSO";
}

$conexao->close();
?>
