<?php
use Presto\Collection;

require_once('vendor/autoload.php');

class CollectionTest extends PHPUnit\Framework\TestCase
{
    private $rows = [
        ["A"=>1, "B"=>1, "C"=>10, "D"=>4],
        ["A"=>2, "B"=>1, "C"=>11, "D"=>4],
        ["A"=>3, "B"=>2, "C"=>20, "D"=>4],
        ["A"=>4, "B"=>2, "C"=>21, "D"=>4],
        ["A"=>5, "B"=>3, "C"=>30, "D"=>4],
        ["A"=>6, "B"=>3, "C"=>31, "D"=>4],
    ];

    private $conds = [
        "case_1"=>[
            "A"=>1,
        ],

        "case_2"=>[
            "A"=>1,
            "B"=>[">=", 2],
        ],

    ];


    public function test_add()
    {
        $collection = new Collection();

        foreach ($this->conds as $cond)
        {
            $rows = collection($this->rows)->where(condition($cond));
            var_dump($rows);
        }

    }

}