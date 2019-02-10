<?php
require_once '../vendor/autoload.php';

try{
    $routings = require_once '../app/routes/admin.php';
    $kanel = new \App\Http\Kanel($routings);
    $kanel->run();
}catch (\Exception $e){
    handler()->report($e);
}