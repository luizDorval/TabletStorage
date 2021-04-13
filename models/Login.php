<?php
require_once 'Connection.php';

class Login
{
    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function login($email, $password)
    {
        $statement = $this->connection->prepare("SELECT email, password 
                                                    FROM Users  
                                                    Where email = :email 
                                                    AND password = :password");
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', md5($password));
        $statement->execute();
        if ($statement->rowCount() > 0) {
            $data = $statement->fetch();
            $_SESSION['id_user'] = $data['email'];
            return true;
        } else {
            return false;
        }
    }

    public function register($email, $password)
    {
        $statement = $this->connection->prepare("INSERT INTO Users(email, password) 
                                                    VALUES(:email, :password)");
        $statement->bindParam(':email', $email);
        $statement->bindParam(':password', md5($password));
        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function validateEmail($email)
    {
        $statement = $this->connection->prepare("SELECT email
                                                    FROM Users  
                                                    Where email = :email");
        $statement->bindParam(':email', $email);
        $statement->execute();
        if ($statement->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
