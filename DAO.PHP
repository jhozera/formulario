<?php
require_once("user.php");
require_once("db.php");

class UserDAO implements UserDAOInterface {

    private $conn;
    private $url;

    public function __construct(PDO $conn, $url) {
        $this->conn = $conn;
        $this->url = $url;
    }
    
    public function buildUser($data) {
        $user = new User();

        $user->id = $data["id"];
        $user->name = $data["name"];
        $user->lastname = $data["lastname"];
        $user->email = $data["email"];
        $user->password = $data["password"];

        return $user;
    }

    public function create(User $user, $authUser = false) {
        $stmt = $this->conn->prepare("INSERT INTO USERS(name, lastname, email, password, token) VALUES (:name, :lastname, :email, :password, :token)");
        $stmt->bindParam(":name", $user->name);
        $stmt->bindParam(":lastname", $user->lastname);
        $stmt->bindParam(":email", $user->email);
        $stmt->bindParam(":password", $user->password);
        $stmt->bindParam(":token", $token); // You need to generate a token here
        $stmt->execute();
    }

    public function update(User $user) {
        
    }

    public function findByToken($token) {
      
    }

    public function verifyToken($protected = false) {
        
    }

    public function setTokenToSession($token, $redirect = true) {
        
    }

    public function authenticateUser($email, $password) {
     
    }

    public function findByEmail($email) {
        
    }

    public function findById($id) {
       
    }

    public function changePassword(User $user) {
      
    }
}
?>
