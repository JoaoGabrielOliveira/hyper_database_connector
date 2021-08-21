<?php
namespace Hyper\Record;

abstract class Driver
{
    public $connectionParams;
    public $connection;

    public abstract function setByParams($params,array $options = []);
    public function __construct($params)
    {
        $this->setByParams($params);
    }


    public function connect():\PDO
    {
        try 
        {
            $this->connection = $this->connection ?? new \PDO($this->ConnectionParams);
            return $this->connection;
        }
        catch(\PDOException $e)
        {
            throw $e;
        }
    }

    public function closeConnection():void
    {
        $this->connection = null;
    }

    public function isConnect():bool
    {
        return !is_null($this->connection);
    }
}

?>