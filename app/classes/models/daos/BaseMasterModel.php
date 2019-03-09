<?php
namespace App\Models\Daos;

use Presto\Databases\Model\Model;

class BaseMasterModel extends Model
{
    protected $connection = 'master';
}