<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterTutorialCharacterDocTrait;

/**
 * master_tutorial_character
 */
class MasterTutorialCharacterModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterTutorialCharacterDocTrait;

    protected $table = "master_tutorial_character";
}
