<?php
return [
    "google"=>[
        "api"=>[
            "scope"=>"https://www.googleapis.com/auth/userinfo.profile",
            "auth"=>"https://accounts.google.com/o/oauth2/auth?",
            "token"=>"https://accounts.google.com/o/oauth2/token",
            "userinfo"=>"https://www.googleapis.com/oauth2/v1/userinfo?access_token=",
        ],

        "client"=>[
            "id" => "php-presto-app",
            "secret"=>"AIzaSyCqTZP82-EmPJaqFdGgFLRv8humjKStXyo",
            "scope" => "",
            "response_type" => "code",
            "callback" => "/admin/auth/google",
        ],

    ],
];