<?php
require_once("DAO.php");
require_once("db.php");
require_once("user.php");
require_once("message.php");
require_once("header.php");

$message = new Message($BASE_URL);

$type = filter_input(INPUT_POST, 'type'); 

if ($type === "register") {
    $name = filter_input(INPUT_POST, 'name');
    $lastname = filter_input(INPUT_POST, 'lastname');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    
    if ($name && $lastname && $email && $password) {
        $userDAO = new UserDAO($conn, $BASE_URL);
        $user = new User();
        $user->name = $name;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->password = $password;
        $userDAO->create($user);
    } else {
        $message->setMessage("Por favor, preencha todos os campos.", "back");
    }
}
