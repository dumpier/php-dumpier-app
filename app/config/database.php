<?php
return [
    'default'=>"admin",

    "connections"=>[
        'admin'         =>['host'=>'127.0.0.1', 'port'=>3306, 'db'=>'thrones_admin', 'character'=>'utf8', 'user'=>'thrones', 'pass'=>'thrones', ],

        'master'        =>['host'=>'127.0.0.1', 'port'=>3306, 'db'=>'thrones_master', 'character'=>'utf8', 'user'=>'thrones', 'pass'=>'thrones', ],
        'player_manage' =>['host'=>'127.0.0.1', 'port'=>3306, 'db'=>'thrones_player_manage', 'character'=>'utf8', 'user'=>'thrones', 'pass'=>'thrones', ],
        'player'        =>['host'=>'127.0.0.1', 'port'=>3306, 'db'=>'thrones_player', 'character'=>'utf8', 'user'=>'thrones', 'pass'=>'thrones', ],
    ],
];