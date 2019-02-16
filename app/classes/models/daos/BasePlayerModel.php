<?php
namespace App\Models\Daos;

use Presto\Model\Model;

class BaseMasterModel extends Model
{
    protected $connection = 'master';
}