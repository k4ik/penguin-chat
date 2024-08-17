<?php
namespace Controller;

class AuthController
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function auth(): void
    {
        $nickname = $_POST["nickname"];

        if(empty($nickname)){
            return;
        }

        $stmt = $this->conn->prepare('SELECT COUNT(*) FROM users WHERE nickname = :nickname');
        $stmt->execute(['nickname' => $nickname]);

        if($stmt->fetchColumn() == 0){
            $stmt = $this->conn->prepare('INSERT INTO users(nickname) VALUES(:nickname)');
            $stmt->execute(['nickname' => $nickname]);
        }

        header('Location: /chat');
        exit();
    }
}
