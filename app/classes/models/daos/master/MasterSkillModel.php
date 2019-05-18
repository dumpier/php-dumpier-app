<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterSkillDocTrait;

/**
 * master_skill
 */
class MasterSkillModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterSkillDocTrait;

    protected $table = "master_skill";
}
