<?php
namespace Hyper;
use Hyper\Database\Drivers\DatabaseConnection;

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
        $connection = $this->connect();
        return $connection->prepare($query);
    }

}