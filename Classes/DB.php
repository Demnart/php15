<?php

class DB
{
    private $dbh;


    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=php13;dbhost=localhost','root','death9393');
        $this->dbh->exec('SET CHARSET utf8');
    }

    public function getAll($sql,$params=[])
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS);
    }
}