<?php

/**
 * Created by PhpStorm.
 * User: genjo
 * Date: 26.06.17
 * Time: 11:17
 */
class DB
{
    private $dbh;


    public function __construct()
    {
        $this->dbh = new PDO('mysql:dbname=php13;dbhost=localhost','root','death9393');
        $this->dbh->exec('SET CHARSET utf8');
    }
}