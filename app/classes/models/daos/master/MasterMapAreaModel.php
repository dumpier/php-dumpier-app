<?php
namespace App\Models\Daos\Master;

use App\Models\Templates\Docs\Master\MasterMapAreaDocTrait;

/**
 * master_map_area
 */
class MasterMapAreaModel extends \App\Models\Daos\BaseMasterModel
{
    use MasterMapAreaDocTrait;

    const PRIMARY_KEY = "area_id";

    protected $table = "master_map_area";
}
