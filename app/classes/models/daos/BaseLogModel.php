<?php
namespace App\Models\Daos;

use Presto\Core\Databases\Model\Model;

class BaseLogModel extends Model
{
    protected $connection = "log_01";
}