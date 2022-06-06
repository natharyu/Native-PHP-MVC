<?php
namespace Models;

abstract class Database {
    
    private static $_dbConnect;
    private static $host = '_YOUR_DB_HOST_';
    private static $user ='_YOUR_DB_USER_';
    private static $pass = '_YOUR_PASSWORD_'; // set '' if no password
    private static $dbname = '_YOUR_DB_NAME_';
    
    private static function setDb()
    {
        self::$_dbConnect = new \PDO( "mysql:host=". self::$host .";dbname=". self::$dbname .";charset=utf8", self::$user , self::$pass);
        self::$_dbConnect->setAttribute( \PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING );
    }
    
    protected static function getDb()
    {
        if( self::$_dbConnect == null)
        {
            self::setdB();
        }
        
        return self::$_dbConnect;
    }
}