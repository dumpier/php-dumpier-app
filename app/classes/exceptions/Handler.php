<?php
namespace App\Exceptions;

use Presto\Core\Traits\Singletonable;

class Handler
{
    use Singletonable;

    public function report(\Exception $e)
    {
        if(request()->isCli())
        {
            // TODO
            return true;
        }

        if(request()->isAjax())
        {
            // TODO
            return true;
        }


        echo $e->getCode();
        echo $e->getMessage();
    }


}