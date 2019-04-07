<?php
namespace App\Models\Entities\Battle;


use App\Models\Entities\Battle\Log\BattleLogManageEntity;
use Presto\Core\Traits\Instanceable;
use Presto\Core\Utilities\Collection;
use App\Defines\Game\BATTLE;

class BattleEntity
{
    use Instanceable;


    /** @var DeckEntity 味方デッキ */
    public $ally;

    /** @var DeckEntity 対戦相手のデッキ */
    public $oppenent;

    /** @var Collection|ActorEntity[] 行動順番とおりのキャラ一覧 */
    public $actors;

    /** @var ActorEntity 現在行動中のキャラ */
    public $actor;
    /** @var ActorEntity 現在行動対象キャラ */
    public $target;

    /** @var BattleLogManageEntity */
    public $logManage;

    /** @var int 現在ラウンド数 */
    public $round = 0;

    /** @var int 現在ラウンドのターン数 */
    public $turn = 0;

    /** @var int 現在までの合計ターン数 */
    public $total_turn = 0;


    public function __construct(Collection $allies, Collection $oppenents)
    {
        $this->ally = new DeckEntity($allies);
        $this->oppenent = new DeckEntity($oppenents);
    }


    public function setActor(ActorEntity $actor)
    {
        $this->actor = $actor;
    }


    public function setTarget(ActorEntity $target)
    {
        $this->target = $target;
    }


    /**
     * スキルのターゲット一覧の取得 TODO 未完成
     * @param int $target_count
     * @return Collection|ActorEntity[]
     */
    public function getTargets(int $target_count)
    {
        // 発動中のスキル
        $skill = $this->actor->skillManage->getSkill();

        return [$this->oppenent[0]];
    }


    /**
     * ゲームオーバー判定
     * @return boolean
     */
    public function isGameOver()
    {
        // 片方が全滅の場合、ゲーム終了
        if ( $this->ally->isDestroyed() || $this->oppenent->isDestroyed() )
        {
            return true;
        }

        // ラウンドMAXを超えたら、ゲーム終了
        if ( $this->round > BATTLE::ROUND_MAX )
        {
            return true;
        }

        return false;
    }
}