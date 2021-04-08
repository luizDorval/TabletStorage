<?php
require_once 'Connection.php';

class Providers
{
    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function add(
        $name = null,
        $phone = null,
        $email = null,
        $id_address = null

    ) {
        $statement = $this->connection->prepare("INSERT INTO Providers (  name, 
                                                                phone, 
                                                                email, 
                                                                id_address)
                                                VALUES(:name, 
                                                        :phone, 
                                                        :email, 
                                                        :id_address);");
        $statement->bindParam(':name', $name);
        $statement->bindParam(':phone', $phone);
        $statement->bindParam(':email', $email);
        $statement->bindParam(':id_address', $id_address);
        if ($statement->execute()) {
            header('Location', BASEURL . '/Success');
            return true;
        } else {
            header('Location', BASEURL . '/Error');
            return false;
        }
    }

    public function getProviders()
    {
        $statement = $this->connection->prepare("SELECT id_provider, 
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
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getProvidersById($id)
    {
        $data = [];
        $statement = $this->connection->prepare("SELECT id_provider, 
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
                                            ON Providers.id_address = Addresses.id_address
                                            WHERE id_provider = :id");
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $data = $statement->fetchall(PDO::FETCH_NUM);
        return $data;
    }
}
