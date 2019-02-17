<?php
require_once '../vendor/autoload.php';
timelines("auto load completed !");

try{
    $routings = require_once '../app/routes/default.php';
    timelines("routing completed !");

    // カーネルの作成
    $kanel = new \App\Http\Kanel($routings);
    timelines("create kanel !");

    // アクションの実行
    $kanel->run();
}catch (\Exception $e){
    handler()->report($e);
}

timelines("completed all !");

debugbar()->render();
