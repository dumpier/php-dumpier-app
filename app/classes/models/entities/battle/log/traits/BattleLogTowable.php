<?php
namespace App\Models\Entities\Battle\Log\Traits;

trait BattleLogTowable
{
    public function toArray()
    {
        $array = [];

        foreach (get_object_vars($this) as $property=>$val)
        {
            if(is_array($val))
            {
                foreach ($val as $key=>$sub)
                {
                    $array[$property][$key] = $sub->toArray();
                }
                continue;
            }

            $array[$property] = $val;
        }

        return $array;
    }

}