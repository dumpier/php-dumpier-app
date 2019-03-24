<?php
namespace App\Models\Entities\Battle;

class StatusManageEntity
{
    /** @var StatusEntity 戦闘中のステータス */
    public $status;

    /** @var StatusEntity キャラ固有のステータス */
    public $originalStatus;


    /**
     * 生きている判定
     * @return boolean
     */
    public function isAlive()
    {
        if($this->status->hp > 0)
        {
            return true;
        }

        return false;
    }


    /**
     * 死んだ判定
     * @return boolean
     */
    public function isDead()
    {
        return ! $this->isAlive();
    }


}