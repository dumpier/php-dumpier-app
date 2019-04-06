<?php
namespace App\Models\Daos\Player;

use App\Models\Daos\BaseMasterModel;
use App\Models\Templates\Docs\Master\MasterTutorialCharacterDocTrait;

class MasterTutorialCharacterModel extends BaseMasterModel
{
    use MasterTutorialCharacterDocTrait;

    /** テーブル名 */
    protected $table = "master_tutorial_character";
}