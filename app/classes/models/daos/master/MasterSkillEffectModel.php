<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterSkillEffectDocTrait;

/**
 * master_skill_effect
 */
class MasterSkillEffectModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterSkillEffectDocTrait;

    protected $table = "master_skill_effect";
}
