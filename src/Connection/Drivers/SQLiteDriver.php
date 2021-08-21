<?php
namespace Hyper\Record\Connection\Drivers;
use Hyper\Record\Driver;

class SQLiteDriver extends Driver
{
    public function setByParams($params, array $options = [])
    {
        $this->ConnectionParams = "sqlite" . ":" . $params['path'];
    }
}
?>