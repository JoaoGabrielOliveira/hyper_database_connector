<?php
namespace Hyper\Database\Drivers;

interface DatabaseConnection
{
    public function __construct($params);
    public function connect();
}

?>