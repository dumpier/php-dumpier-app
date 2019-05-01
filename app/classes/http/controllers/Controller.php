<?php
namespace App\Http\Controllers;

use Presto\Core\Views\View;

class Controller extends \Controller
{
    public $layout = 'html/layouts/admin/html';
    public $type = View::HTML;

}