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
        $query = $this->connection->query("SELECT id_provider, 
                                                    name, 
                                                    phone,
                                                    email, 
                                                    Providers.id_address, 
                                                    Addresses.street, 
                                                    Addresses.number, 
                                                    Addresses.city, 
                                                    Addresses.state, 
                                                    Addresses.cep 
                                            FROM Providers 
                                            INNER JOIN Addresses 
                                            ON Providers.id_address = Addresses.id_address");
        $data = $query->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProvidersById($id)
    {
        $data = [];
        $query = $this->connection->query("SELECT id_provider, 
                                                    name, 
                                                    phone,
                                                    email, 
                                                    id_address
                                            FROM Providers 
                                            WHERE id_provider = $id");
        $data = $query->fetchall(PDO::FETCH_NUM);
        return $data;
    }
}
