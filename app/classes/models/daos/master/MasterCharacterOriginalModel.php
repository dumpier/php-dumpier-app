<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterCharacterOriginalDocTrait;

/**
 * master_character_original
 */
class MasterCharacterOriginalModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterCharacterOriginalDocTrait;

    const PRIMARY_KEY = "character_original_id";

    protected $table = "master_character_original";
}
