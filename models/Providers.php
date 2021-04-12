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
        $street = null,
        $number = null,
        $city = null,
        $state = null,
        $cep = null
    ) {
        $statement = $this->connection->prepare("INSERT INTO Providers (  name, 
                                                                phone, 
                                                                email, 
                                                                street,
                                                                number,
                                                                city,
                                                                state,
                                                                cep)
                                                VALUES(:name, 
                                                        :phone, 
                                                        :email, 
                                                        :street,
                                                        :number,
                                                        :city,
                                                        :state,
                                                        :cep);");
        $statement->bindParam(':name', $name);
        $statement->bindParam(':phone', $phone);
        $statement->bindParam(':email', $email);
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

    public function alter(
        $id_provider = null,
        $name = null,
        $phone = null,
        $email = null,
        $street = null,
        $number = null,
        $city = null,
        $state = null,
        $cep = null
    ) {
        $statement = $this->connection->prepare("UPDATE Providers 
                                                SET name = :name,
                                                    phone = :phone,
                                                    email = :email,
                                                    street = :street,
                                                    number = :number,
                                                    city = :city,
                                                    state = :state,
                                                    cep = :cep
                                                WHERE id_provider = :id_provider");
        $statement->bindParam(':id_provider', $id_provider);
        $statement->bindParam(':name', $name);
        $statement->bindParam(':phone', $phone);
        $statement->bindParam(':email', $email);
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

    public function getProviders()
    {
        $statement = $this->connection->prepare("SELECT id_provider, 
                                                    name, 
                                                    phone,
                                                    email, 
                                                    street, 
                                                    number, 
                                                    city, 
                                                    state, 
                                                    cep 
                                                FROM Providers ");
        $statement->execute();
        $data = $statement->fetchAll();
        return $data;
    }

    public function getProvidersById($id)
    {
        $data = [];
        $statement = $this->connection->prepare("SELECT id_provider, 
                                                    name, 
                                                    phone,
                                                    email, 
                                                    street,
                                                    number,
                                                    city,
                                                    state,
                                                    cep
                                                FROM Providers 
                                                WHERE id_provider = :id");
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $data = $statement->fetchAll();
        return $data;
    }

    public function getProvidersByProviderName($providerName)
    {
        $data = [];
        $statement = $this->connection->prepare("SELECT id_provider, 
                                                    name, 
                                                    phone,
                                                    email, 
                                                    street,
                                                    number,
                                                    city,
                                                    state,
                                                    cep
                                                FROM Providers 
                                                WHERE name = :name");
        $statement->bindParam(':name', $providerName);
        $statement->execute();
        $data = $statement->fetchAll();
        return $data;
    }

    public function delete($id = null)
    {
        $statement = $this->connection->prepare("DELETE FROM Providers 
                                                WHERE id_provider = :id");
        $statement->bindParam(':id', $id);
        if ($statement->execute()) {
            header('Location', BASEURL . '/Success');
            return true;
        } else {
            header('Location', BASEURL . '/Error');
            return false;
        }
    }
}
