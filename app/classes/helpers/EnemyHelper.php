<?php
namespace App\Helpers;

use Presto\Core\Traits\Singletonable;

class EnemyHelper
{
    use Singletonable;

    public function small(int $character_id=0)
    {
        list($position_x, $position_y) = $this->getPosition($character_id, 50, 50);

        return <<<EOF
<div style="width: 50px; height:50px; border:solid 3px #17a2b8;border-radius: 0px 20px 20px 0px;
  background-image :url('/res/images/character/fase/face-all.jpg');
  background-repeat: no-repeat;
  background-size: 250px;
  background-position: -{$position_x}px -{$position_y}px;
"></div>
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