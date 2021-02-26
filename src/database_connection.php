<?php
namespace Hyper\Record\Connection;

interface DatabaseConnection
{
    public function __construct($params, array $options = []);
    public function connect();
}

?>