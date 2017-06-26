<?php


abstract class AbstractModel
{

    protected static $table;

    public static function findAll()
    {
        $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClass($class);
        return $db->getAll($sql);
    }

    public static function findOneByPK($id)
    {
        $class=get_called_class();
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE id =:id ';
        $db = new DB();
        $db->setClass($class);
        return $db->getAll($sql,[':id' =>$id])[0];
    }
}