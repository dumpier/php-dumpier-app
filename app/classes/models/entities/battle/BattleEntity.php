<?php
namespace App\Models\Entities\Battle;


use App\Models\Entities\Battle\Log\BattleLogManage;
use Presto\Core\Traits\Instanceable;
use Presto\Core\Utilities\Collection;
use App\Defines\Game\BATTLE;

class BattleEntity
{
    use Instanceable;


    /** @var DeckEntity 味方デッキ */
    public $AllyDeck;

    /** @var DeckEntity 対戦相手のデッキ */
    public $OppenentDeck;

    /** @var Collection|ActorEntity[] 行動順番とおりのキャラ一覧 */
    public $Actors;

    /** @var ActorEntity 現在行動中のキャラ */
    public $Actor;
    /** @var SkillEntity 現在行動中のスキル */
    public $Skill;
    /** @var ActorEntity 現在行動対象キャラ */
    public $Target;

    /** @var BattleLogManage */
    public $LogManage;

    /** @var int 現在ラウンド数 */
    public $round = 0;

    /** @var int 現在ラウンドのターン数 */
    public $turn = 0;

    /** @var int 現在までの合計ターン数 */
    public $total_turn = 0;


    public function __construct(DeckEntity $AllyDeck, DeckEntity $OppenentDeck)
    {
        $this->LogManage = new BattleLogManage;

        $this->AllyDeck = $AllyDeck;
        $this->OppenentDeck = $OppenentDeck;

        // actor_idの採番
        $actor_id = 0;
        foreach ($this->AllyDeck->Actors as $Actor)
        {
            $actor_id ++;
            $Actor->actor_id = $actor_id;
            $Actor->team_id = BATTLE::TEAM_ID_ALLY;
        }

        foreach ($this->OppenentDeck->Actors as $Actor)
        {
            $actor_id ++;
            $Actor->actor_id = $actor_id;
            $Actor->team_id = BATTLE::TEAM_ID_OPPENENT;
        }

    }


    /**
     * Actorを行動順番通りに並ぶ
     * @return ActorEntity[]
     */
    public function getActorListByTurn()
    {
        $actors = [];

        $allies = $this->getActorListByAlive();
        $oppenents = $this->getActorListByAlive(BATTLE::TEAM_ID_OPPENENT);

        foreach ($allies as $Ally)
        {
            $actors[] = $Ally;

            if($Oppenent = array_shift($oppenents))
            {
                $actors[] = $Oppenent;
            }
        }

        return $actors;
    }

    public function getActorListByAlive(int $team_id=BATTLE::TEAM_ID_ALLY)
    {
        /* @var $actors ActorEntity[] */
        $actors = ($team_id==BATTLE::TEAM_ID_ALLY) ? $this->AllyDeck->Actors->all() : $this->OppenentDeck->Actors->all();

        foreach ($actors as $key=>$Actor)
        {
            if($Actor->isDead())
            {
                unset($actors[$key]);
            }
        }

        return $actors;
    }


    public function setActor(ActorEntity $Actor) { $this->Actor = $Actor; }
    public function setTarget(ActorEntity $Target) { $this->Target = $Target; }
    public function setSkill(SkillEntity $Skill) { $this->Skill = $Skill; }

    public function getActor() { return $this->Actor; }
    public function getTarget() { return $this->Target; }
    public function getSkill() { return $this->Skill; }


    /**
     * バトル終了判定
     * @return boolean
     */
    public function isBattleOver()
    {
        // 片方が全滅の場合、ゲーム終了
        if ( $this->AllyDeck->isDestroyed() || $this->OppenentDeck->isDestroyed() )
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


    /**
     * バトル継続判定
     * @return boolean
     */
    public function isBattleContinue()
    {
        return ! $this->isBattleOver();
    }
}