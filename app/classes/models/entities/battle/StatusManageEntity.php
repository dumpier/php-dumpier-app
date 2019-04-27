<?php
namespace App\Models\Entities\Battle;

class StatusManageEntity
{
    /** @var StatusEntity 戦闘中のステータス */
    public $Status;

    /** @var StatusEntity キャラ固有のステータス */
    public $OriginalStatus;

    public function __construct(array $status)
    {
        $this->Status = new StatusEntity($status);
        $this->OriginalStatus = new StatusEntity($status);
    }

    /**
     * 生きている判定
     * @return boolean
     */
    public function isAlive()
    {
        if($this->Status->hp > 0)
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