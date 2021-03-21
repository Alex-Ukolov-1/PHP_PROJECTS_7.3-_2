<?php
namespace REALFACTORY\Models;

class Page extends \REALFACTORY\Router
{
    public $title;
    public $content;

    public function __construct(
         $title,
         $content)
    {
        $this->title   = $title;
        $this->content = $content;
    }

    public function render()
    {
        return '<h1>' . htmlspecialchars($this->title) . '</h1>' .
               '<p>' . htmlspecialchars($this->content) . '</p>';
    }
}
?>
