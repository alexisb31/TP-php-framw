<?php

namespace Core;

use PDO;

abstract class Model
{
    protected static $table = null;

    protected $attributes = [];

    public static function find($id)
    {
        $db = static::dbConnect();

        $table = static::getTableName();
        $sql = 'SELECT * FROM ' . $table . ' WHERE id = :id';

        $query = $db->prepare($sql);

        $query->execute([
            'id' => $id,
        ]);

        $query->setFetchMode(PDO::FETCH_CLASS, get_called_class());

        return $query->fetch();
    }

    public static function get()
    {
        $db = static::dbConnect();

        $table = static::getTableName();
        $sql = 'SELECT * FROM ' . $table;

        $query = $db->prepare($sql);

        $query->execute();

        $query->setFetchMode(PDO::FETCH_CLASS, get_called_class());

        return $query->fetchAll();
    }

    protected static function dbConnect()
    {
        $name = getenv('DB_NAME');
        $host = getenv('DB_HOST');
        $user = getenv('DB_USER');
        $password = getenv('DB_PWD');

        $dsn = 'mysql:dbname=' . $name . ';host=' . $host;
        
        return new PDO($dsn, $user, $password);
    }

    protected static function getTableName()
    {
        if (isset(static::$table)) {
            return static::$table;
        }

        $singular = strtolower(getClassBasename(get_called_class()));

        switch (substr($singular, -1)) {

            case 'y':
                return substr($singular, 0, -1) . 'ies';
    
            case 's':
            case 'o':
                return $singular . 'es';

            default:
                return $singular . 's';
        }
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        return $this->attributes[$name];
    }
}