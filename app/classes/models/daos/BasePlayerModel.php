<?php
namespace App\Models\Daos;

use Presto\Core\Databases\Model\Model;

class BasePlayerModel extends Model
{
    protected $connection = "player";
}