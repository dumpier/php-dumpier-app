<?php
$time_start = microtime(true);
require_once '../vendor/autoload.php';
debugbar()->unshift($time_start);
timelines("auto load completed !");

session_start();

try{
    $routings = require_once '../app/routes/default.php';
    timelines("routing completed !");

    // カーネルの作成
    $kanel = new \App\Http\Kanel($routings);
    timelines("create kanel !");

    // アクションの実行
    $kanel->run();
}catch (\Exception $e){
    var_dump($e);
}

timelines("completed all !");

debugbar()->render();
