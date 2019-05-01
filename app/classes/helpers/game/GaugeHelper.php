<?php
namespace App\Helpers\Game;

use Presto\Core\Traits\Instanceable;

class GaugeHelper
{
    use Instanceable;

    protected $background = "#17a2b8";
    protected $color = "#fd7e14";
    protected $border = "border: solid 1px #777;";
    protected $height = "6px";
    protected $width = "100vh";

    public function background(string $value)
    {

    }

    public function color(string $value)
    {

    }

    public function border(string $value)
    {

    }

    public function width(string $value)
    {

    }

    public function height(string $value)
    {

    }

    public function render()
    {
        return <<<EOF
<div style="background:{$this->background}; {$this->border}">
    <div style="background: {$this->color}; width:30%;"></div>
</div>
EOF;
    }

}