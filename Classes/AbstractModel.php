<?php


abstract class AbstractModel
{

    protected static $table;

    public static function findAll()
    {
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        return $db->getAll($sql);
    }
}