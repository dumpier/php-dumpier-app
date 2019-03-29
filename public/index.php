<?php
use App\Exceptions\Handler;

$time_start = microtime(true);
require_once '../vendor/autoload.php';
debugbar()->unshift($time_start);
timelines("auto load completed !");

session_start();

try{
    // ルーティングの設定
    $routings = require_once path("app/routes/default.php");
    routing()->routings($routings);

    timelines("routing completed !");

    // カーネルの作成
    $kanel = new \App\Http\Kanel();

    // アクションの実行
    $kanel->run();
}catch (\Exception $e){
    Handler::instance()->report($e);
}

timelines("completed all !");

// debugbar()->render();
