<?php
namespace App\Models\Repositories\Player;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\PlayerWeaponModel;

class PlayerWeaponRepository extends Repository
{
    protected $class = PlayerWeaponModel::class;

}
