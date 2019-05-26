<?php
namespace App\Models\Repositories\Master;

use Presto\Core\Databases\Model\Repository;
use App\Models\Daos\Master\MasterSkillModel;
use Presto\Core\Databases\Model\Model;

/**
 * master_skill
 */
class MasterSkillRepository extends Repository
{
    protected $class = MasterSkillModel::class;


    protected $relations = [
        MasterSkillOriginalRepository::class=>[
            "type"=>Model::HAS_ONE,
            "repository"=>MasterSkillOriginalRepository::class,
            "join"=>[
                "MasterSkillOriginal"=>[
                    "skill_original_id"=>"skill_original_id",
                ],
            ],
        ],

        MasterSkillEffectRepository::class=>[
            "type"=>Model::HAS_MANY,
            "repository"=>MasterSkillEffectRepository::class,
            "join"=>[
                "MasterSkillEffect"=>[
                    "skill_id"=>"skill_id",
                ],
            ],
        ],
    ];
}
