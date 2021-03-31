<?php
namespace Hyper\Record\Connection\Drivers;
use Hyper\Record\Connection\DatabaseConnection;
use PDOException;

class PostgreSQLConnection implements DatabaseConnection
{
    public $User, $Password, $Options;
    public $ConnectionParams;
    public function __construct(){}
    public function setByParams($params, array $options = [])
    {
        $this->connection_params = "pgsql" .
        ':dbname=' . $params['name'] .
        ';host=' . $params['host'] .
        ';port=' . $params['port'] . ';charset=utf8';

        $this->user = $params['user'];
        $this->password = $params['password'];
    }

    public function connect()
    {
        try
        {
            return new \PDO($this->ConnectionParams,$this->User, $this->Password, $this->options);
        }

        catch(PDOException $e)
        {
            echo 'Conexão falhou: ' . $e->getMessage();
        }
    }
}

?>
