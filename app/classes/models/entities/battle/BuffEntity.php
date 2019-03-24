<?php
namespace App\Models\Entities\Battle;


class BuffEntity
{
    /** @var int 状態異常ID */
    public $buff_id;

    /** @var int 状態異常分類 */
    public $type;

    /** @var bool 有利｜不利 */
    public $is_positive;

    /** @var int 残り継続ターン数 */
    public $turn;

    // ----------------------------------------
    // TODO 未定：
    // ----------------------------------------
    /** @var int 発動成功確率 */
    public $rate;

    /** @var int 効果値 */
    public $value;
    // ----------------------------------------


    /**
     * 継続ターン数を上げる
     * @param int $count
     * @return \App\Models\Entities\Battle\BuffEntity
     */
    public function turnUp(int $count=1)
    {
        $this->turn += $count;
        return $this;
    }

    /**
     * 継続ターン数を下げる
     * @param int $count
     * @return \App\Models\Entities\Battle\BuffEntity
     */
    public function turnDown(int $count=1)
    {
        $this->turn -= $count;
        return $this;
    }

}