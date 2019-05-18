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
                    if(method_exists($sub, "toArray"))
                    {
                        $array[$property][$key] = $sub->toArray();
                    }
                    else
                    {
                        $array[$property][$key] = $sub;
                    }
                }
                continue;
            }

            $array[$property] = $val;
        }

        return $array;
    }

}