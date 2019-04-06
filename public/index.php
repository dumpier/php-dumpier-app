<?php
use App\Exceptions\Handler;

$time_start = microtime(true);
require_once '../vendor/autoload.php';
debugbar()->unshift($time_start);
debugbar()->timelines("auto load completed !");

session_start();

try{
    // ルーティングの設定
    $routings = require_once path("app/routes/default.php");
    presto()->routing()->routings($routings);

    debugbar()->timelines("routing completed !");

    // カーネルの作成
    $kanel = new \App\Http\Kanel();

    // アクションの実行
    $kanel->run();
}catch (\Exception $e){
    Handler::instance()->report($e);
}

debugbar()->timelines("completed all !");

// debugbar()->render();
