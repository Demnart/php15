<?php


class AdminController
{

    public function insert()
    {
        $test = new NewsModel();
        $test->title = 'Ура';
        $test->text = 'Yui';
        $test->author = 'Artiom Rogov';
        $test->insert();
    }
}