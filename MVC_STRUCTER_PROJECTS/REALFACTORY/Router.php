<?php
namespace REALFACTORY;

abstract class Router
{
    public static function parse($url)
    {     //присвоить arr текущий url после '/'
        $arr = explode('/', $url);
		//абсолютный путь к файлам
        $class = 'REALFACTORY\\Models\\' . ucfirst($arr[0]);
		//если переменных больше 2 , то выдать arr[1] , иначе null
        $id = count($arr) > 1 ? $arr[1] : null;
		//создание нового объекта класса class- если id пустой - вернуть объект. Если id не пустой , то добавить объект класса в коллекцию collection[id]
		//если id-пустой , то вернуть переменную
        $obj = new $class();
        if(is_null($id)) {
            return $obj;
        } else {
			//возвращает коллекцию пользователей/страниц, если там есть 2 переменных с explode;
            return $obj->collection[$id];
        }
    }
    //абстрактный метод который наследуют все классы
    abstract public function render();
	
	
	//Лёха внимание*** название класса и название файла должны совпадать так как в в 10 строке и в 15 (он про переменной в 10 .... создает класс users/pages в 15
	
}