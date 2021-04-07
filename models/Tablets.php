<?php
require_once 'Connection.php';

class Tablets
{
    private $connection;

    public function __construct()
    {
        $this->connection = Connection::getConnection();
    }

    public function getTablets()
    {
        $data = [];
        $query = $this->connection->query("SELECT id_tablet,
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
        $data = $query->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getTabletsById($id)
    {
        $data = [];
        $query = $this->connection->query("SELECT id_tablet,
                                                    brand, 
                                                    model, 
                                                    color, 
                                                    value, 
                                                    fabrication_date, 
                                                    register_on_system_date, 
                                                    id_provider  
                                            FROM Tablets
                                            WHERE Tablets.id_tablet = $id");
        $data = $query->fetchall(PDO::FETCH_NUM);
        return $data;
    }
}
