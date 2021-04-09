<?php
namespace Hyper\Record\Connection\Drivers;
use Hyper\Record\Connection\DatabaseConnection;

class SQLiteConnection extends DatabaseConnection
{
    public function setByParams($params, array $options = [])
    {
        $this->ConnectionParams = "sqlite" . ":" . $params['path'];
    }
}
?>