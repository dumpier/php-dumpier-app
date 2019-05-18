<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterBuffDocTrait;

/**
 * master_buff
 */
class MasterBuffModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterBuffDocTrait;

    protected $table = "master_buff";
}
