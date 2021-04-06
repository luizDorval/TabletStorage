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
        $query = $this->connection->query("SELECT id_tablet, brand, model, color, value, Providers.name, fabrication_date, register_on_system_date 
                                            FROM Tablets, Providers 
                                            WHERE Tablets.id_provider = Providers.id_provider");
        $data = $query->fetchall(PDO::FETCH_ASSOC);
        return $data;
    }
}
