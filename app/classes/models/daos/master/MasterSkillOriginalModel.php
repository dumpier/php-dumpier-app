<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterSkillOriginalDocTrait;

/**
 * master_skill_original
 */
class MasterSkillOriginalModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterSkillOriginalDocTrait;

    protected $table = "master_skill_original";
}
