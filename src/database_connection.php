<?php
namespace Hyper\Record\Connection;

interface DatabaseConnection
{
    public function __construct($params);
    public function connect();
}

?>