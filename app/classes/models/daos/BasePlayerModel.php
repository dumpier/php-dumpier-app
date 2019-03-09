<?php
namespace App\Models\Daos;

use Presto\Databases\Model\Model;

class BasePlayerModel extends Model
{
    protected $connection = 'player_shard_01';
}