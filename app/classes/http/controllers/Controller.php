<?php
namespace App\Http\Controllers;

use Presto\View;

class Controller extends \Controller
{
    public $layout = 'html/layouts/html';
    public $type = View::TYPE_HTML;

}