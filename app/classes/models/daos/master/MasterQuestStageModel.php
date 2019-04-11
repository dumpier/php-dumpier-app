<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterQuestStageDocTrait;

/**
 * master_quest_stage
 */
class MasterQuestStageModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterQuestStageDocTrait;

    const PRIMARY_KEY = "stage_id";

    protected $table = "master_quest_stage";
}
