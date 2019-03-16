<?php
namespace App\Models\Daos;

use Presto\Core\Databases\Model\Model;

class BaseMasterModel extends Model
{
    protected $connection = 'master';
}