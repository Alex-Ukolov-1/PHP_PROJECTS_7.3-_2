<?php
namespace REALFACTORY\Models;

class Pages1 extends Collection
{
    public $pages;

    public function __construct($pages = null)
    {
        if(is_null($pages))
        {
            $pages = [
                new Page(
                     'выведен 1 метод users.php класса pages from collection',
                     'Содержимое первой статьи'),
                new Page(
                     'выведен 2 метод pages.php класса pages from collection',
                     'Содержимое второй статьи')
            ];
        }
        parent::__construct($pages);
    }

    public function render()
    {
        return implode('', parent::render());
    }
}
?>
