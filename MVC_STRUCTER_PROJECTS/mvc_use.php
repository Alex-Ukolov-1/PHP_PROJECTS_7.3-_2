<?php
spl_autoload_register();
use MVC\Controllers\Controller;

$obj=new Controller('pages.rss');
echo $obj->render();
?>
