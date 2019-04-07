<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterCharacterLevelDocTrait;

/**
 * master_character_level
 */
class MasterCharacterLevelModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterCharacterLevelDocTrait;

    protected $table = "master_character_level";
}
