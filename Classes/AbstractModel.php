<?php


abstract class AbstractModel
{

    protected static $table;
    protected  $data=[];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

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

    public function insert()
    {
        $cols = array_keys($this->data);
        foreach ($cols as $value)
        {
            $data[':'.$value] = $this->data[$value];
        }
       echo $sql = 'INSERT INTO ' . static::$table . '
        ('.implode(',',$cols).')
        VALUES
        ('.implode(',',array_keys($data)).') ';
    }

}