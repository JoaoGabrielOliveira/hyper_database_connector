<?php
namespace Hyper\Record\Connection;

interface DatabaseConnection
{
    public function setByParams($params,array $options = []);
    public function connect();
}

?>