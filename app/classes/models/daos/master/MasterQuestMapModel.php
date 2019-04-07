<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterQuestMapDocTrait;

/**
 * master_quest_map
 */
class MasterQuestMapModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterQuestMapDocTrait;

    const PRIMARY_KEY = "map_id";

    protected $table = "master_quest_map";
}
