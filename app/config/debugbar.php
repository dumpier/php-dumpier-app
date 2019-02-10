<?php
return [
    'items'=>[
        \Presto\Debugbar\Debugbar::TYPE_MESSAGES =>['enable'=>true, 'css'=>'fa fa-comment', ],
        \Presto\Debugbar\Debugbar::TYPE_TIMELINES =>['enable'=>true, 'css'=>'fa fa-clock', ],
        \Presto\Debugbar\Debugbar::TYPE_EXCEPTIONS =>['enable'=>true, 'css'=>'fa fa-bug', ],
        \Presto\Debugbar\Debugbar::TYPE_ROUTES =>['enable'=>true, 'css'=>'fa fa-route', ],
        \Presto\Debugbar\Debugbar::TYPE_QUERIES =>['enable'=>true, 'css'=>'fa fa-database', ],
        \Presto\Debugbar\Debugbar::TYPE_FILES =>['enable'=>true, 'css'=>'fa fa-file', ],
        \Presto\Debugbar\Debugbar::TYPE_VIEWS =>['enable'=>true, 'css'=>'fa fa-map', ],
        \Presto\Debugbar\Debugbar::TYPE_SESSIONS =>['enable'=>true, 'css'=>'fa fa-user', ],
        \Presto\Debugbar\Debugbar::TYPE_REQUESTS =>['enable'=>true, 'css'=>'fa fa-envelope', ],
        \Presto\Debugbar\Debugbar::TYPE_CONFIGS =>['enable'=>true, 'css'=>'fa fa-file', ],
        \Presto\Debugbar\Debugbar::TYPE_GATE =>['enable'=>true, 'css'=>'fa fa-gate', ],
        \Presto\Debugbar\Debugbar::TYPE_AUTH =>['enable'=>true, 'css'=>'fa fa-shield', ],
        \Presto\Debugbar\Debugbar::TYPE_LOGS =>['enable'=>true, 'css'=>'fa fa-tasks', ],
    ],
];
