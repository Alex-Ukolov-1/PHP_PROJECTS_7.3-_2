<?php
namespace REALFACTORY\Models;

class Users1 extends Collection
{
    public $users;

    public function __construct($users = null)
    {
        if(is_null($users))
        {
            $users = [
                new User(
                     'выведен метод 1 users.php класса users from collection',
                     'password',
                     'выведен метод 1 users.php класса users from collection',
                     'Кузнецов'),
                new User(
                     'выведен метод 1 users.php класса users from collection',
                     'password',
                     'выведен метод 1 users.php класса users from collection',
                     'Симдянов')
            ];
        }
        parent::__construct($users);
    }

    public function render()
    {
        return implode('<br />', parent::render());
    }
}

?>
