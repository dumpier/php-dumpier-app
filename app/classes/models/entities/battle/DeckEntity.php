<?php
namespace App\Models\Entities\Battle;


use Presto\Core\Utilities\Collection;

class DeckEntity
{
    /** @var Collection|ActorEntity[] */
    public $characters;

    /** @var int 相手に与えた合計ダメージ */
    public $total_damage = 0;

    /** @var int 現在行動中のキャラー */
    public $actor_id = 0;



}