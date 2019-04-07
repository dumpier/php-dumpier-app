<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterCharacterModel;
use App\Exceptions\AppException;

/**
 * master_character
 */
class MasterCharacterRepository extends Repository
{
    protected $class = MasterCharacterModel::class;


    public function getByCharacterId(int $character_id)
    {
        $row = $this->findByPk($character_id);

        if(empty($row))
        {
            throw new AppException("キャラが見つからない[character_id:{$character_id}]");
        }

        return $row;
    }
}
