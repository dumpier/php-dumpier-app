<?php
namespace App\Models\Daos\Admin;

use App\Models\Daos\BaseAdminModel;
use App\Models\Templates\Docs\Admin\AdminDocTrait;

class AdminModel extends BaseAdminModel
{
    use AdminDocTrait;

    /** テーブル名 */
    protected $table = "admin";

}