<?php
return [
     '/'=>['controller' =>\App\Http\Controllers\Game\TopController::class, 'action'=>'index', 'parameters'=>[]],

     '/admin/'=>['controller' =>\App\Http\Controllers\Admin\TopController::class, 'action'=>'index', 'parameters'=>[]],

//     "/admin/resource/index/" =>['controller'=>\App\Http\Controllers\Admin\ResourceController::class, 'action'=>'index', 'parameters'=>[]],
//     "/admin/resource/view/" =>['controller'=>\App\Http\Controllers\Admin\ResourceController::class, 'action'=>'view', 'parameters'=>[]],

//     "/admin/database/index/" =>['controller'=>\App\Http\Controllers\Admin\DatabaseController::class, 'action'=>'index', 'parameters'=>[]],
//     "/admin/database/tables/" =>['controller'=>\App\Http\Controllers\Admin\DatabaseController::class, 'action'=>'tables', 'parameters'=>[]],
//     "/admin/database/datas/" =>['controller'=>\App\Http\Controllers\Admin\DatabaseController::class, 'action'=>'datas', 'parameters'=>[]],

];