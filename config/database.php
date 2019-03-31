<?php
return [
    "default"=>"admin",

    "connections"=>[
        "admin" =>["driver"=>"mysqli", "host"=>"presto.homestead.test", "port"=>3306, "db"=>"presto_admin", "character"=>"utf8", "user"=>"thrones", "pass"=>"thrones", ],

        "master" =>["driver"=>"mysqli", "host"=>"presto.homestead.test", "port"=>3306, "db"=>"presto_master", "character"=>"utf8", "user"=>"thrones", "pass"=>"thrones", ],
        "player" =>["driver"=>"mysqli", "host"=>"presto.homestead.test", "port"=>3306, "db"=>"presto_player", "character"=>"utf8", "user"=>"thrones", "pass"=>"thrones", ],
        "player_manage" =>["driver"=>"mysqli", "host"=>"presto.homestead.test", "port"=>3306, "db"=>"presto_player", "character"=>"utf8", "user"=>"thrones", "pass"=>"thrones", ],

        "player_shard_01" =>["driver"=>"mysqli", "host"=>"presto.homestead.test", "port"=>3306, "db"=>"presto_player_shard_01", "character"=>"utf8", "user"=>"thrones", "pass"=>"thrones", ],

        "log_01" =>["driver"=>"mysqli", "host"=>"presto.homestead.test", "port"=>3306, "db"=>"presto_log_01", "character"=>"utf8", "user"=>"thrones", "pass"=>"thrones", ],
    ],
];