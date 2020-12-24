<?php
namespace Hyper\Database;
use Hyper\Database;
use Hyper\Database\Drivers\Connections\PostgreSQLConnection;
use Hyper\Database\Drivers\Connections\SQLiteConnection;

class ConnectionManagement
{
    private static Database $DATABASE;
    private static $_driver;

    public static function setDatabase($params)
    {
        if(isset($params['db']))
            $params = $params['db'];

        self::setDriver($params);
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