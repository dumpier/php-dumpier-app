<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\MasterCharacterModel;

class MasterCharacterRepository extends Repository
{
    protected $class = MasterCharacterModel::class;
}