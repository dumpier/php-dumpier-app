<?php
namespace App\Helpers\Game;

use Presto\Core\Traits\Singletonable;

class CharacterHelper
{
    use Singletonable;

    public function image($character_id=0, int $size=50, int $border_size=0)
    {
        $character_id = $this->getCharacterId($character_id);
        return $this->size($character_id, $size, $border_size);
    }

    public function size($character_id=0, int $size=50, int $border_size=2)
    {
        $character_id = $this->getCharacterId($character_id);

        $real_size = $size - $border_size * 2;
        $background_size_x = $real_size * 4;
        $background_size_y = $real_size * 2;
        list($position_x, $position_y) = $this->getPosition($character_id, $real_size, $real_size);
        $url = $this->url($character_id);

        return <<<EOF
<div class="character-icon" style="box-sizing: content-box; width: {$size}px; height:{$size}px; border: solid {$border_size}px #fd7e14; border-radius:5px;  box-shadow:2px 2px 2px 2px rgba(0,0,0,0.2); ">
  <div style="box-sizing: border-box; width:{$real_size}px; height:{$real_size}px;
    background-image :url('{$url}');
    background-repeat: no-repeat;
    background-size: {$background_size_x}px {$background_size_y}px;
    background-position: -{$position_x}px -{$position_y}px;">
  </div>
</div>
EOF;
    }

    public function body($character_id, int $size)
    {
        $character_id = $this->getCharacterId($character_id);
        return <<<EOF

EOF;
    }

    private function getCharacterId($character_id)
    {
        if(strlen($character_id) <= 3)
        {
            return (int)$character_id;
        }

        return (int)(substr($character_id, 0, 1) . substr($character_id, 2, 2)) - 100;
    }


    private function getPosition(int $character_id=0, int $size_x, int $size_y)
    {
        return [0, 0];
        list($x, $y) = $this->getXY($character_id);

        return [$x * $size_x, $y * $size_y];
    }


    private function getXY(int $character_id=0)
    {
        return [0, 0];
        $character_id = !empty($character_id) ? $character_id - 1 : $character_id;
        $x = ($character_id % 5);
        $y = floor($character_id / 5);

        return [$x, $y];
    }

    public function url(int $character_id=0)
    {
        // return "/res/images/character-dummy/fase/2face-all.jpg";
        $number = sprintf("%03d", $character_id);
        return "/res/images/character/face/96x96/yhvxl{$number}.png";
    }

}