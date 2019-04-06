<?php
namespace App\Models\Daos\Player;

use App\Models\Daos\BaseMasterModel;
use App\Models\Templates\Docs\Master\MasterCharacterOriginalDocTrait;

class MasterCharacterOriginalModel extends BaseMasterModel
{
    use MasterCharacterOriginalDocTrait;

    /** テーブル名 */
    protected $table = "master_character_original";

}