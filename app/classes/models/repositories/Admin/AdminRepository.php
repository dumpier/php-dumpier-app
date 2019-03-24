<?php
namespace App\Models\Repositories\Admin;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Admin\AdminModel;
use App\Exceptions\AppException;

class AdminRepository extends Repository
{
    protected $class = AdminModel::class;


    /**
     * 管理者情報の取得
     * @param string $email
     * @throws AppException
     * @return AdminModel
     */
    public function getByEmail(string $email)
    {
        $cond = [];
        $cond["condition"]["email"] = $email;

        $row = $this->findFirst($cond);

        if(empty($row))
        {
            throw new AppException("管理者情報が見当たらない[email:{$email}]");
        }

        return $row;
    }

}
