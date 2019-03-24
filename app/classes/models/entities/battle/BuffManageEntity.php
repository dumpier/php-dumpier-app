<?php
namespace App\Models\Entities\Battle;


use Presto\Core\Utilities\Collection;
use App\Defines\Game\BUFF;

class BuffManageEntity
{
    /** @var Collection|BuffEntity[] */
    protected $buffs;

    /**
     * 状態異常の取得
     * @param int $buff_id
     * @return BuffEntity|null
     */
    public function get(int $buff_id)
    {
        return $this->buffs->where("buff_id", $buff_id)->first();
    }

    /**
     * ターン数が0の状態異常を削除する
     */
    public function cleanup()
    {
        $this->buffs->where("turn", ">", 0);
    }

    /**
     * 状態異常を追加
     * @param int $buff_id
     * @param int $turn
     */
    public function add(int $buff_id, int $turn)
    {
        $buff = $this->get($buff_id);

        if(empty($buff))
        {
            $buff = new BuffEntity($buff_id, $turn);
            $this->buffs->put($buff);
        }

        // ターン数が多きいのを入れ替える
        if($buff->turn < $turn)
        {
            $buff->turn = $turn;
        }

        return $this;
    }

    // TODO 解除
    public function clear(int $buff_id)
    {
        return $this;
    }

    /**
     * 継続ターン数をカウントダウン
     * @param int $buff_id
     * @return $this
     */
    public function turnDown(int $buff_id)
    {
        /* @var $buff BuffEntity */
        if($buff = $this->get($buff_id))
        {
            $buff->turnDown();
        }

        return $this;
    }


    /**
     * 動けるかの判定
     * @return boolean
     */
    public function isActable()
    {
        return ! $this->isUnactable();
    }


    /**
     * 動けないかの判定
     *      TODO 動けない、凍結、麻痺。。。
     * @return boolean
     */
    public function isUnactable()
    {
        if ( $this->buffs->where("type", BUFF::TYPE_UNACTABLE, 1)->count )
        {
            return true;
        }

        return false;
    }
}