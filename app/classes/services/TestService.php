<?php
namespace App\Services;

class TestService extends \Service
{
    public function test()
    {
        echo "is test ! " . __FILE__;
    }
}