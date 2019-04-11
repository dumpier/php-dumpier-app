<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterQuestAreaDocTrait;

/**
 * master_quest_area
 */
class MasterQuestAreaModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterQuestAreaDocTrait;

    const PRIMARY_KEY = "area_id";

    protected $table = "master_quest_area";
}
