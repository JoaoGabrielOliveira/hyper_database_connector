<?php
namespace Hyper\Record\Connection;
use Hyper\Record\Database;
use Hyper\Record\Connection\Drivers\PostgreSQLConnection;
use Hyper\Record\Connection\Drivers\SQLiteConnection;

class ConnectionManagement
{
    private static $DATABASE;
    private static $_driver;

    public static function setDatabase($params)
    {
        if(isset($params['db']))
            $params = $params['db'];

        self::setDriver($params);

        self::$DATABASE = new Database(self::getDriver());
    }

    public static function setDriver($params)
    {
        switch($params['driver'])
        {
            case 'psql':
                self::$_driver = new PostgreSQLConnection($params);
            break;

            case 'sqlite':
                self::$_driver = new SQLiteConnection($params);
            break;
        }
    }

    public static function getDriver()
    {
        return self::$_driver;
    }

    public static function getDatabase():Database
    {
        return self::$DATABASE;
    }

    public static function prepareStatement(string $query)
    {
        return self::getDatabase()->prepare_statement($query);
    }
}