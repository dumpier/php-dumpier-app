<?php
namespace App\Models\Entities\Battle;


use Presto\Core\Utilities\Collection;
use App\Models\Daos\Player\PlayerCharacterModel;

class DeckEntity
{
    /** @var Collection|ActorEntity[] */
    public $Actors;

    /** @var int 現在行動中のキャラー */
    public $actor_id = 0;

    /** @var int 相手に与えた合計ダメージ */
    public $total_damage = 0;

    /** @var int 味方の残りHP合計 */
    public $total_hp;

    /** @var bool HP合計の再計算フラグ */
    public $recalculate_total_hp = true;


    /**
     *
     * @param Collection|PlayerCharacterModel[] $Characters
     */
    public function __construct($Characters)
    {
        $this->Actors = collection();

        foreach ($Characters as $Character)
        {
            $Actor = new ActorEntity($Character->getStatus(), $Character->getSkillList(), $Character->getBuffList());
            $this->Actors->put($Actor);
        }
    }

    /**
     * 全滅判定
     * @return boolean
     */
    public function isDestroyed()
    {
        if($this->getTotalHp() <= 0)
        {
            return TRUE;
        }

        return FALSE;
    }


    /**
     * デッキの残HPの合計を取得
     * @return int
     */
    public function getTotalHp()
    {
        // 再計算が不要な場合
        if ( ! $this->recalculate_total_hp )
        {
            return $this->total_hp;
        }

        // 再計算する
        $this->total_hp = 0;

        foreach ($this->Actors as $Actor)
        {
            $this->total_hp += $Actor->hp();
        }

        return $this->total_hp;
    }
}