<?php
namespace App\Helpers\Game;

use Presto\Core\Traits\Singletonable;

class CharacterHelper
{
    use Singletonable;

    public function image(int $character_id=0, int $size=50, int $border_size=0)
    {
        $real_size = $size - $border_size * 2;
        $background_size = $real_size * 5;
        list($position_x, $position_y) = $this->getPosition($character_id, $real_size, $real_size);


        return <<<EOF
<div style="width: {$size}px; height:{$size}px; border: solid {$border_size}px #fd7e14; border-radius: 5px; ">
  <div style="width:{$real_size}px; height:{$real_size}px;
    background-image :url('/res/images/character-dummy/fase/2face-all.jpg');
    background-repeat: no-repeat;
    background-size: {$background_size}px;
    background-position: -{$position_x}px -{$position_y}px;">
  </div>
</div>
EOF;
    }

    public function size(int $character_id=0, int $size=50, int $border_size=2)
    {
        $real_size = $size - $border_size * 2;
        $background_size = $real_size * 5;
        list($position_x, $position_y) = $this->getPosition($character_id, $real_size, $real_size);

        return <<<EOF
<div style="width: {$size}px; height:{$size}px; border: solid {$border_size}px #fd7e14; border-radius: 5px; ">
  <div style="width:{$real_size}px; height:{$real_size}px;
    background-image :url('/res/images/character-dummy/fase/face-all.jpg');
    background-repeat: no-repeat;
    background-size: {$background_size}px;
    background-position: -{$position_x}px -{$position_y}px;">
  </div>
</div>
EOF;
    }


    private function getPosition(int $character_id=0, int $size_x, int $size_y)
    {
        list($x, $y) = $this->getXY($character_id);

        return [$x * $size_x, $y * $size_y];
    }


    private function getXY(int $character_id=0)
    {
        $character_id = !empty($character_id) ? $character_id - 1 : $character_id;
        $x = ($character_id % 5);
        $y = floor($character_id / 5);

        return [$x, $y];
    }


}