<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterStatusDocTrait;

/**
 * master_status
 */
class MasterStatusModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterStatusDocTrait;

    protected $table = "master_status";
}
