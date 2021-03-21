<?php

class ShopProduct
{
  public $title;
  public $producerMainName;
  public $producerFirstName;
  public $price;
  
  //$this-для проверки объектных//$self-для классовых

  function __construct($title,$firstname,$mainName,$price)
  {
  	$this->title = $title;
  	$this->producerFirstName = $firstname;
  	$this->producerMainName = $mainName;
  	$this->price = $price;
  }

  function getProducer()
  {
  	return "{$this->price}";
  }

  function getSummaryLine()
  {
  	$base="{$this->title}
  	({$this->producerMainName},";
  	$base .="{$this->producerFirstName})";
  	return $base;
  }
}
 
  $product2 = new ShopProduct ( " Пропавший без вести","Группа ", "ДДТ " ,10.99);
  echo $product2->getSummaryLine();
  echo $product2->getProducer();
  //echo "Исполнитель : ($product2- >getProducer ()) \n";

?>