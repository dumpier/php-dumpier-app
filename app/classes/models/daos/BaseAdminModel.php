<?php
namespace App\Models\Daos;

use Presto\Core\Databases\Model\Model;

class BaseAdminModel extends Model
{
    protected $connection = 'admin';
}