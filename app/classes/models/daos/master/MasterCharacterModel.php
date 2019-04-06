<?php
namespace App\Models\Daos\Player;

use App\Models\Daos\BaseMasterModel;
use App\Models\Templates\Docs\Master\MasterCharacterDocTrait;

class MasterCharacterModel extends BaseMasterModel
{
    use MasterCharacterDocTrait;

    const PRIMARY_KEY = "character_id";

}