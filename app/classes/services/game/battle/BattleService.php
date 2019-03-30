<?php
namespace App\Services\Game\Battle;

use Presto\Core\Utilities\Collection;
use App\Models\Entities\Battle\BattleEntity;

class BattleService extends \Service
{
    /**
     * バトル処理
     * @param Collection $allies 味方デッキ
     * @param Collection $oppenents 対戦相手のデッキ
     * @return BattleEntity
     */
    public function battle(Collection $allies, Collection $oppenents)
    {
        // BattleEntityの作成
        $battleEntity = new BattleEntity($allies, $oppenents);

        // バトル開幕処理（開幕パッシブスキルの発動等）
        $this->opening($battleEntity);

        do
        {
            // ラウンド開始
            $this->roundStart($battleEntity);

            // 行動順番通りに行動する
            foreach ($battleEntity->actors as $actor)
            {
                if ( ! $actor->isActable() )
                {
                    // 行動不能な場合、TODO 行動不能ログを記録する
                    continue;
                }

                // 行動者を決める
                $battleEntity->setActor($actor);

                // ターゲットを決める
                $this->targeting($battleEntity, $actor);

                // ゲーム終了判定
                if($battleEntity->isGameOver())
                {
                    break;
                }
            }

            // ラウンド終了
            $this->roundEnd($battleEntity);
        }
        while( $battleEntity->isGameOver() );

        // 閉幕処理
        $this->ending($battleEntity);

        return $battleEntity;
    }


    /**
     * 開幕処理
     * @param BattleEntity $battleEntity
     */
    private function opening(BattleEntity $battleEntity)
    {

    }

    /**
     * 閉幕処理
     * @param BattleEntity $battleEntity
     */
    private function ending(BattleEntity $battleEntity)
    {

    }


    /**
     * ラウンド開始
     *  - 死亡したキャラを除いて、行動順番を決める
     * @param BattleEntity $battleEntity
     */
    private function roundStart(BattleEntity $battleEntity)
    {
        // ラウンドをカウントアップ
        $battleEntity->round += 1;

        // ターン数をリセット
        $battleEntity->turn = 0;
    }


    /**
     * ラウンド終了
     *  - 片方全滅判定を行うなど
     * @param BattleEntity $battleEntity
     */
    private function roundEnd(BattleEntity $battleEntity)
    {

    }


    // ターゲティング処理
    private function targeting(BattleEntity $battleEntity)
    {
        // ターゲッティング回数を決める
        $skill = $battleEntity->actor->skillManage->getSkill();

        $targeting_count = $skill->getTargetingCount();

        for ( $i=0; $i <= $targeting_count; $i++ )
        {
            $this->targets($battleEntity);

            if($battleEntity->isGameOver())
            {
                return true;
            }
        }
    }

    // ターゲット処理
    private function targets(BattleEntity $battleEntity)
    {
        $skill = $battleEntity->actor->skillManage->getSkill();
        $target_count = $skill->getTargetCount();

        $targets = $battleEntity->getTargets($target_count);

        foreach ($targets as $target)
        {
            // ターゲットを設定
            $battleEntity->setTarget($target);

            if($battleEntity->isGameOver())
            {
                return true;
            }
        }
    }


    // 行動処理
    private function actions(BattleEntity $battleEntity)
    {
        $skill = $battleEntity->actor->skillManage->getSkill();
        $action_count = $skill->getActionCount();

        for ( $i=0; $i <= $action_count; $i++ )
        {
            $this->action($battleEntity);

            if($battleEntity->isGameOver())
            {
                return true;
            }
        }
    }


    // 単体行動処理
    private function action(BattleEntity $battleEntity)
    {
        $skill = $battleEntity->actor->skillManage->getSkill();
    }

}