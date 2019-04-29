<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterQuestStageModel;
use Presto\Core\Utilities\Collection;

/**
 * master_quest_stage
 */
class MasterQuestStageRepository extends Repository
{
    protected $class = MasterQuestStageModel::class;

    /**
     * 最初のステージの取得
     * @param int $area_id
     * @return MasterQuestStageModel|NULL
     */
    public function getFirstStage(int $area_id=0)
    {
        $cond = [];

        if($area_id)
        {
            $cond["condition"]["area_id"] = $area_id;
        }

        return $this->findFirst($cond);
    }


    /**
     * 指定エリアの最終ステージの取得
     * @param int $area_id
     * @return MasterQuestStageModel
     */
    public function getLastStage(int $area_id)
    {
        $cond = [];

        if($area_id)
        {
            $cond["condition"]["area_id"] = $area_id;
        }

        $cond["order"][] = "id DESC";
        return $this->findFirst($cond);
    }


    /**
     * 指定エリアのステージ一覧の取得
     * @param int $area_id
     * @return Collection|MasterQuestStageModel[]
     */
    public function getListByAreaId(int $area_id)
    {
        $cond = [];
        $cond["condition"]["area_id"] = $area_id;

        return $this->find($cond);
    }


    /**
     * ステージの取得
     * @param int $area_id
     * @return MasterQuestStageModel|NULL
     */
    public function getByStageId(int $stage_id)
    {
        $row = $this->findByPk($stage_id);

        return $row;
    }


}
