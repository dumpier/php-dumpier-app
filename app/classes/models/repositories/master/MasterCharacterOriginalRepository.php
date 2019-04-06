<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\MasterCharacterOriginalModel;

class MasterCharacterOriginalRepository extends Repository
{
    protected $class = MasterCharacterOriginalModel::class;
}