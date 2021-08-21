<?php
namespace Hyper\Record\Connection\Drivers;
use Hyper\Record\Driver;

class PostgreSQLDriver extends Driver
{
    public $User, $Password, $Options;
    
    public function setByParams($params, array $options = [])
    {
        $this->connection_params = "pgsql" .
        ':dbname=' . $params['name'] .
        ';host=' . $params['host'] .
        ';port=' . $params['port'] . ';charset=utf8';

        $this->user = $params['user'];
        $this->password = $params['password'];
    }

    public function connect():\PDO
    {
        try
        {
            $this->connection = $this->connection ?? new \PDO($this->ConnectionParams,$this->User, $this->Password, $this->options);;
            return $this->connection;
        }

        catch(\PDOException $e)
        {
            throw $e;
        }
    }
}

?>
