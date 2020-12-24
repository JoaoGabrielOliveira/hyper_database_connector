<?php
namespace Hyper\Database;

interface DatabaseConnection
{
    public function __construct($params);
    public function connect();
}

?>