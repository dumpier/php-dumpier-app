<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterCharacterDocTrait;

/**
 * master_character
 */
class MasterCharacterModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterCharacterDocTrait;

    const PRIMARY_KEY = "character_id";

    protected $table = "master_character";
}
