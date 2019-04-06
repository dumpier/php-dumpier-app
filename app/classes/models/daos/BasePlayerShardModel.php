<?php
namespace App\Models\Daos;

use Presto\Core\Databases\Model\Model;

class BasePlayerShardModel extends Model
{
    protected $connection = "player_shard";
}