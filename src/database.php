<?php
namespace Hyper\Record;
use Hyper\Record\Connection\DatabaseConnection;

class Database
{
    private $driver_connection;

    public function __construct(DatabaseConnection $connection)
    {
        $this->driver_connection = $connection;
    }

    public function connect()
    {
        return $this->driver_connection->connect();
    }
}