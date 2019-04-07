<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterQuestStageModel;

/**
 * master_quest_stage
 */
class MasterQuestStageRepository extends Repository
{
    protected $class = MasterQuestStageModel::class;
}
