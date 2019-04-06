<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Player\MasterCharacterModel;
use App\Exceptions\AppException;

class MasterCharacterRepository extends Repository
{
    protected $class = MasterCharacterModel::class;


    /**
     *
     * @param int $character_id
     * @throws AppException
     * @return MasterCharacterModel
     */
    public function getById(int $character_id)
    {
        $row = $this->findByPk($character_id);

        if(empty($row))
        {
            throw new AppException();
        }

        return $row;
    }
}