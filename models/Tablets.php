<?php
require_once 'Connection.php';

class Tablets
{
    private $connection;

    public $brand;

    public $model;

    public $color;

    public $value;

    public $fabrication_date;

    public $register_on_system_date;

    public $tablet_id_provider;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function add(
        $brand = null,
        $model = null,
        $color = null,
        $value = null,
        $tablet_id_provider = null,
        $fabrication_date = null,
        $register_on_system_date = null

    ) {
        $statement = $this->connection->prepare("INSERT INTO Tablets (  brand, 
                                                                model, 
                                                                color, 
                                                                value,
                                                                id_provider, 
                                                                fabrication_date, 
                                                                register_on_system_date)
                                                VALUES(:brand, 
                                                        :model, 
                                                        :color, 
                                                        :value,
                                                        :id_provider, 
                                                        :fabrication_date, 
                                                        :register_on_system_date);");
        $statement->bindParam(':brand', $brand);
        $statement->bindParam(':model', $model);
        $statement->bindParam(':color', $color);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':id_provider', $tablet_id_provider);
        $statement->bindParam(':fabrication_date', $fabrication_date);
        $statement->bindParam(':register_on_system_date', $register_on_system_date);
        if ($statement->execute()) {
            header('Location', BASEURL . '/Success');
            return true;
        } else {
            header('Location', BASEURL . '/Error');
            return false;
        }
    }

    public function alter(
        $id_tablet = null,
        $brand = null,
        $model = null,
        $color = null,
        $value = null,
        $tablet_id_provider = null,
        $fabrication_date = null,
        $register_on_system_date = null
    ) {
        $statement = $this->connection->prepare("UPDATE Tablets 
                                                SET brand = :brand,
                                                    model = :model,
                                                    color = :color,
                                                    value = :value,
                                                    id_provider = :id_provider,
                                                    fabrication_date = :fabrication_date,
                                                    register_on_system_date = :register_on_system_date 
                                                WHERE id_tablet = :id_tablet");
        $statement->bindParam(':id_tablet', $id_tablet);
        $statement->bindParam(':brand', $brand);
        $statement->bindParam(':model', $model);
        $statement->bindParam(':color', $color);
        $statement->bindParam(':value', $value);
        $statement->bindParam(':id_provider', $tablet_id_provider);
        $statement->bindParam(':fabrication_date', $fabrication_date);
        $statement->bindParam(':register_on_system_date', $register_on_system_date);
        if ($statement->execute()) {
            header('Location', BASEURL . '/Success');
            return true;
        } else {
            header('Location', BASEURL . '/Error');
            return false;
        }
    }

    public function delete($id = null)
    {
        $statement = $this->connection->prepare("DELETE FROM Tablets 
                                                WHERE id_tablet = :id");
        $statement->bindParam(':id', $id);
        if ($statement->execute()) {
            header('Location', BASEURL . '/Success');
            return true;
        } else {
            header('Location', BASEURL . '/Error');
            return false;
        }
    }

    public function getTablets()
    {
        $statement = $this->connection->prepare("SELECT id_tablet,
                                                    brand, 
                                                    model, 
                                                    color, 
                                                    value, 
                                                    fabrication_date, 
                                                    register_on_system_date, 
                                                    Tablets.id_provider, 
                                                    Providers.name  
                                            FROM Tablets
                                            INNER JOIN Providers
                                            ON Tablets.id_provider = Providers.id_provider");
        $statement->execute();
        $data = $statement->fetchAll();
        return $data;
    }

    public function getTabletsById($id)
    {
        $statement = $this->connection->prepare("SELECT id_tablet,
                                                    brand, 
                                                    model, 
                                                    color, 
                                                    value, 
                                                    fabrication_date, 
                                                    register_on_system_date, 
                                                    id_provider  
                                            FROM Tablets
                                            WHERE Tablets.id_tablet = :id");
        $statement->bindParam(':id', $id, PDO::PARAM_INT);
        $statement->execute();
        $data = $statement->fetchAll(PDO::FETCH_NUM);
        return $data;
    }
}
