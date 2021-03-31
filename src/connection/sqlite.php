<?php
namespace Hyper\Record\Connection\Drivers;
use Hyper\Record\Connection\DatabaseConnection;
use PDOException;

class SQLiteConnection implements DatabaseConnection
{
    public $ConnectionParams;
    public function __construct(){}
    public function setByParams($params, array $options = [])
    {
        $this->ConnectionParams = "sqlite" . ":" . $params['path'];
    }

    public function connect()
    {
        try 
        {
            $connection = new \PDO($this->ConnectionParams);
            return $connection;
        }
        catch(PDOException $e)
        {
            echo 'Conexão falhou: ' . $e->getMessage();
        }
    }
}
?>