<?php
namespace App\Models\Daos\Player\Manage;


use App\Models\Daos\BasePlayerManageModel;

class PlayerManageModel extends BasePlayerManageModel
{
    const PRIMARY_KEY = 'player_id';
    protected $table = 'player_manage';

    // TODO 自動生成
    protected $properties = ["player_id", "type", "uuid", "device_id", "public_id",];

}