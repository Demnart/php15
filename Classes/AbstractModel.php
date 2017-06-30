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

    public function insert()
    {
        $cols = array_keys($this->data);
        foreach ($cols as $value)
        {
            $data[':'.$value] = $this->data[$value];
        }
        $sql = 'INSERT INTO ' . static::$table . '
        ('.implode(',',$cols).')
        VALUES
        ('.implode(',',array_keys($data)).') ';

        $db = new DB();
        $db->execute($sql,$data);
    }

    public function findByColumn($column,$value)
    {
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . ' = :value ';
        $db = new DB();
        return $db->getAll($sql,[':value'=>$value]);
    }

    public function deleteById()
    {
        $sql = 'DELETE FROM ' . static::$table . ' WHERE id = :id';
        $db = new DB();
        return $db->getAll($sql,[':id' => $this->data['id']]);
    }


}