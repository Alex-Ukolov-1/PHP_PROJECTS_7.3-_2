<?php
class dangerous
{
function red()
  {
// Инициализируем URL файла в переменную

$url = 'https://5s1.ru/wp-content/uploads/2016/07/Akula.jpg';

  
// Используем функцию basename () для возврата базового имени файла

$file_name = basename($url);

   
// Используем функцию file_get_contents () для получения файла
// из url и используем функцию file_put_contents () для
// сохранить файл, используя базовое имя

if(file_put_contents( $file_name,file_get_contents($url))) {

    echo "File downloaded successfully";

}

else {

    echo "File downloading failed.";

}
   }
}
$lake=new dangerous();
$lake->red();
?>