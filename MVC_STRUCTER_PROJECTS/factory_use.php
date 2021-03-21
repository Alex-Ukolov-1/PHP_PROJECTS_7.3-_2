<?php
spl_autoload_register();
use Factory\Router;

$obj=Router::parse('pages');
echo $obj->render();
?>
