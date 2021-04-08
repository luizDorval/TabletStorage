<?php
require_once 'Connection.php';
class Addresses
{
    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function add(
        $street = null,
        $number = null,
        $city = null,
        $state = null,
        $cep = null

    ) {
        $statement = $this->connection->prepare("INSERT INTO Addresses (  street, 
                                                                number, 
                                                                city, 
                                                                state,
                                                                cep)
                                                VALUES(:street, 
                                                                :number, 
                                                                :city, 
                                                                :state,
                                                                :cep);");
        $statement->bindParam(':street', $street);
        $statement->bindParam(':number', $number);
        $statement->bindParam(':city', $city);
        $statement->bindParam(':state', $state);
        $statement->bindParam(':cep', $cep);
        if ($statement->execute()) {
            header('Location', BASEURL . '/Success');
            return true;
        } else {
            header('Location', BASEURL . '/Error');
            return false;
        }
    }

    public function getAdresses()
    {
        $data = [];
        $query = $this->connection->query("SELECT id_address, street, number, city, state, cep FROM Addresses");
        $data = $query->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
}
