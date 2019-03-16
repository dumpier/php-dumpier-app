<?php
return [
    'items'=>[
        \Presto\Core\Utilities\Debugbar::TYPE_MESSAGES =>['enable'=>true, 'css'=>'fa fa-comment', ],
        \Presto\Core\Utilities\Debugbar::TYPE_TIMELINES =>['enable'=>true, 'css'=>'fa fa-clock', ],
        \Presto\Core\Utilities\Debugbar::TYPE_EXCEPTIONS =>['enable'=>true, 'css'=>'fa fa-bug', ],
        \Presto\Core\Utilities\Debugbar::TYPE_ROUTES =>['enable'=>true, 'css'=>'fa fa-route', ],
        \Presto\Core\Utilities\Debugbar::TYPE_QUERIES =>['enable'=>true, 'css'=>'fa fa-database', ],
        \Presto\Core\Utilities\Debugbar::TYPE_FILES =>['enable'=>true, 'css'=>'fa fa-file', ],
        \Presto\Core\Utilities\Debugbar::TYPE_VIEWS =>['enable'=>true, 'css'=>'fa fa-map', ],
        \Presto\Core\Utilities\Debugbar::TYPE_SESSIONS =>['enable'=>true, 'css'=>'fa fa-user', ],
        \Presto\Core\Utilities\Debugbar::TYPE_REQUESTS =>['enable'=>true, 'css'=>'fa fa-envelope', ],
        \Presto\Core\Utilities\Debugbar::TYPE_CONFIGS =>['enable'=>true, 'css'=>'fa fa-file', ],
        \Presto\Core\Utilities\Debugbar::TYPE_GATE =>['enable'=>true, 'css'=>'fa fa-gate', ],
        \Presto\Core\Utilities\Debugbar::TYPE_AUTH =>['enable'=>true, 'css'=>'fa fa-shield', ],
        \Presto\Core\Utilities\Debugbar::TYPE_LOGS =>['enable'=>true, 'css'=>'fa fa-tasks', ],
    ],
];
