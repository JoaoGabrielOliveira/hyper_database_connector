<?php
namespace Hyper;
use Hyper\Database\DatabaseConnection;

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

    public function prepare_statement(string $query)
    {
        return $this->connect->prepare($query);
    }

}