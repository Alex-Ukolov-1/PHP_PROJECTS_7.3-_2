<?php
spl_autoload_register();
use REALFACTORY\Router;
//отсылает к классу router с методом render
//взависимости от переменной идёт инофрмация о том какой класс с методом применять
$obj=Router::parse('pages1');
echo $obj->render();
?>
