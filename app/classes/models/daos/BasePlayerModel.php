<?php
namespace App\Models\Daos;

use Presto\Mvc\Model\Model;

class BaseMasterModel extends Model
{
    protected $connection = 'master';
}