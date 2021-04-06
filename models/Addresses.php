<?php
require_once 'Connection.php';
class Addresses
{
    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function getAdresses()
    {
        $data = [];
        $query = $this->connection->query("SELECT id_address, street, number, city, state, cep FROM Addresses");
        $data = $query->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
}
