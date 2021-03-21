<?php
namespace REALFACTORY\Models;

class Collection extends \REALFACTORY\Router
{
    public $collection;
    
    public function __construct($collection = null)
    {
        $this->collection = $collection;
    }

	//возвращает массив создавая рекурсию и отсылая к collection
	//Отсылает данные к классу роутер к методу render
	//вернуть значения
    public function render()
    {
        return array_map(
                   function($item){
                       return $item->render();
                   },
                   $this->collection);
    }
}
?>
