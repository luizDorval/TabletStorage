<?php
require_once 'Connection.php';

class Providers
{
    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function getProviders()
    {
        $data = [];
        $query = $this->connection->query("SELECT id_provider, name, phone, email, Addresses.street, Addresses.number, Addresses.city, Addresses.state, Addresses.cep 
                                            FROM Providers, Addresses 
                                            WHERE Providers.id_address = Addresses.id_address");
        $data = $query->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
}
