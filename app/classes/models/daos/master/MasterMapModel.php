<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterMapDocTrait;

/**
 * master_map
 */
class MasterMapModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterMapDocTrait;

    const PRIMARY_KEY = "map_id";

    protected $table = "master_map";
}
