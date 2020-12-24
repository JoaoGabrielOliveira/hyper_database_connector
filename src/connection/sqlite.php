<?php
namespace Hyper\Database\Drivers;

use Hyper\Database\DatabaseConnection as Connection;
use Hyper\Database\DatabaseOperations as Operations;
use Hyper\Database\DbConnection;
use Hyper\Database\CRUD\select;

use PDOException;
use PDO;

class SQLiteConnection implements Connection
{
    public $connection_params;
    public function __construct($params)
    {
        $this->connection_params = "sqlite" . ":" . $params['path'];
    }

    public function connect()
    {
        try 
        {
            $connection = new \PDO($this->connection_params);
            return $connection;
        }
        catch(PDOException $e)
        {
            echo 'Conexão falhou: ' . $e->getMessage();
        }
    }
}
?>