<?php
namespace Controller;
include "../../config/database.php";

class AuthController
{
    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function login(string $username, string $password): void
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(empty($username) || empty($password)) {
            echo json_encode(["error" => "Preencha os campos"]);
            return;
        }

        $stmt = $conn->prepare('SELECT * FROM users WHERE username = :username AND passoword = :password');
        $stmt->execute(array('username => $username', 'password' => $password));

        if ($stmt->rowCount() == 1) {
            header("Location: /room");
        }
    }

    public function signup(string $username, string $email, string $password): void
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if(empty($username) || empty($email) || empty($password)) {
            echo json_encode(["error" => "Preencha os campos"]);
            return;
        }

        $stmt = $conn->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute(array('username => $username'));

        $count = $stmt->rowCount();
        if ($count == 1) {
            echo json_encode(["error" => "Já existe um usuário com essas credenciais"]);
            return;
        }

        $stmt = $conn->prepare('INSERT INTO users(name, email, password) VALUES(:username, :email, :password)');
        $stmt->execute(array('username => $username', 'email => $email', 'password => $password'));

        header('Location: /room');
    }
}