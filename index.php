<?php
require __DIR__ . '/autoload.php';

?>

<form action="/functions/functions.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title">
    <input type="file" name="foto">
    <input type="submit">
</form>
<?php
/*$contr = isset($_GET['contr']) ? $_GET['contr'] : 'News';
$act = isset($_GET['act']) ? $_GET['act'] : 'All';

$controllerClassName = $contr . 'Controller';

$controller = new $controllerClassName();
$method = 'action' . $act;
$controller->$method();*/
?>
