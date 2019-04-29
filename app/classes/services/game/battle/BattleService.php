<?php
namespace App\Services\Game\Battle;

use App\Models\Entities\Battle\BattleEntity;
use App\Models\Entities\Battle\DeckEntity;

class BattleService extends \Service
{
    /**
     * バトル処理
     * @param DeckEntity $AllyDeck 味方デッキ
     * @param DeckEntity $OppenentDeck 対戦相手のデッキ
     * @return BattleEntity
     */
    public function battle(DeckEntity $AllyDeck, DeckEntity $OppenentDeck)
    {
        // BattleEntityの作成
        $BattleEntity = new BattleEntity($AllyDeck, $OppenentDeck);

        // バトル開幕処理（開幕パッシブスキルの発動等）
        $this->opening($BattleEntity);

        do
        {
            // ラウンド開始
            $this->roundStart($BattleEntity);

            // ラウンド処理
            $this->round($BattleEntity);

            // ラウンド終了
            $this->roundEnd($BattleEntity);
        }
        while( $BattleEntity->isBattleContinue() );

        // 閉幕処理
        $this->ending($BattleEntity);

        return $BattleEntity;
    }


    /**
     * 開幕処理
     * @param BattleEntity $BattleEntity
     */
    private function opening(BattleEntity $BattleEntity)
    {
        $BattleEntity->round += 1;
        $BattleEntity->turn = 0;
    }

    /**
     * 閉幕処理
     * @param BattleEntity $BattleEntity
     */
    private function ending(BattleEntity $BattleEntity)
    {

    }

    /**
     * ラウンド開始
     *  - 死亡したキャラを除いて、行動順番を決める
     * @param BattleEntity $BattleEntity
     */
    private function roundStart(BattleEntity $BattleEntity)
    {

    }

    /**
     * ラウンド終了
     *  - 片方全滅判定を行うなど
     * @param BattleEntity $BattleEntity
     */
    private function roundEnd(BattleEntity $BattleEntity)
    {

    }

    /**
     * ラウンド実行
     * @param BattleEntity $BattleEntity
     */
    private function round(BattleEntity $BattleEntity)
    {
        // 行動順番通りに行動する
        foreach ($BattleEntity->getActors() as $Actor)
        {
            if ( ! $Actor->isActable() )
            {
                // 行動不能な場合、TODO 行動不能ログを記録する
                continue;
            }

            // 行動者を決める
            $BattleEntity->setActor($Actor);

            // TODO 行動前の状態異常反映

            // スキル発動、ターゲットを決める
            $this->skill($BattleEntity, $Actor);

            // TODO 行動後の状態異常反映

            // ゲーム終了判定
            if($BattleEntity->isGameOver())
            {
                break;
            }
        }
    }


    // スキル処理
    private function skill(BattleEntity $BattleEntity)
    {
        // スキル決定
        $Skill = $BattleEntity->Actor->SkillManage->getSkill();
        $BattleEntity->setSkill($Skill);

        // TODO スキル発動時の効果

        $targeting_count = $Skill->getTargetingCount();

        for ( $i=0; $i <= $targeting_count; $i++ )
        {
            $this->targets($BattleEntity);

            if($BattleEntity->isGameOver())
            {
                break;
            }
        }

        // TODO スキル発動後の効果
    }

    // ターゲット処理
    private function targets(BattleEntity $BattleEntity)
    {
        $Skill = $BattleEntity->getSkill();
        $target_count = $Skill->getTargetCount();

        $Targets = $BattleEntity->getTargets($target_count);

        foreach ($Targets as $Target)
        {
            // ターゲットを設定
            $BattleEntity->setTarget($Target);

            // 行動一覧
            $this->actions($BattleEntity);

            if($BattleEntity->isGameOver())
            {
                return true;
            }
        }
    }

    // 行動処理
    private function actions(BattleEntity $BattleEntity)
    {
        $Skill = $BattleEntity->Actor->SkillManage->getSkill();
        $action_count = $Skill->getActionCount();

        // 行動回数分ループ
        for ( $i=0; $i <= $action_count; $i++ )
        {
            $this->action($BattleEntity);

            if($BattleEntity->isGameOver())
            {
                return true;
            }
        }
    }

    // 単体行動処理
    private function action(BattleEntity $BattleEntity)
    {
        $Skill = $BattleEntity->getSkill();
    }

}