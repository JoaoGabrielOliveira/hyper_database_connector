<?php
namespace Hyper\Record;
use Hyper\Record\Driver;

class Database
{
    private $driver_connection;

    public function __construct(Driver $driver)
    {
        $this->driver_connection = $driver;
    }

    public function connect()
    {
        return $this->driver_connection->connect();
    }

    public function close()
    {
        return $this->driver_connection->closeConnection();
    }
}