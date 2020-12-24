<?php
namespace Hyper\Database\Drivers\Operations;

use Hyper\Database;
use Hyper\Database\Drivers\DatabaseOperations;

class PostgreSQLOperations implements DatabaseOperations
{
    public Database $database;

    public function create_table(string $table_name, array $columns)
    {
        
    }

    public function drop_table(string $table_name)
    {
        
    }

    public function get_all_columns(string $table_name)
    {
        
    }
}

?>