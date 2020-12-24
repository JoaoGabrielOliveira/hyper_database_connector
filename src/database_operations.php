<?php
namespace Hyper\Database\Drivers;

interface DatabaseOperations
{
    public function get_all_columns(string $table_name);
    public function create_table(string $table_name, array $columns);
    public function drop_table(string $table_name);
}


?>