<?php
if(! function_exists("character")) { /** @return string */ function character() { return \App\Helpers\Game\CharacterHelper::instance(); } }
if(! function_exists("gauge")) { /** @return string */ function gauge() { return \App\Helpers\Game\GaugeHelper::instance(); } }