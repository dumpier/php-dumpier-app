<?php
namespace App\Exceptions;

use Presto\Traits\Singletonable;

class Handler
{
    use Singletonable;

    public function report(\Exception $e)
    {
        echo $e->getCode();
        echo $e->getMessage();
    }


}