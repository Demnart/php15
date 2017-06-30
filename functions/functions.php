<?php
session_start();

if (isset($_FILES)&& !empty($_POST['title']))
{
    $data =[];
    $data['name'] = $_FILES['foto']['name'];
    $data['path'] = __DIR__ .'/../Photo/' . $_FILES['foto']['name'];
    $newname = __DIR__ . '/../Photo/' . basename($_FILES['foto']['name']);
    if (is_uploaded_file($_FILES['foto']['tmp_name']))
    {
        move_uploaded_file($_FILES['foto']['tmp_name'],$newname);
    }

}
else{
    $_SESSION['error'] = 'Ошибка';
    echo $_SESSION['error'];
}