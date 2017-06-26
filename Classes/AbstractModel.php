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

    public static function findOneByPK($id)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id =:id ';
        $db = new DB();
        return $db->getAll($sql,[':id' =>$id])[0];
    }
}