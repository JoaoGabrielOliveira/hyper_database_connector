<?php
namespace Hyper\Record\Connection\Drivers;
use Hyper\Record\Connection\DatabaseConnection;
use PDOException;

class PostgreSQLConnection implements DatabaseConnection
{
    public $user, $password, $options;
    public $connection_params;
    public function __construct($params, array $options = [])
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
            return new \PDO($this->connection_params,$this->user, $this->password, $this->options);
        }

        catch(PDOException $e)
        {
            echo 'Conexão falhou: ' . $e->getMessage();
        }
    }
}

?>
