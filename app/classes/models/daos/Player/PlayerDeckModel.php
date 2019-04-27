<?php
namespace App\Models\Daos\Player;

use App\Models\Daos\BasePlayerModel;
use App\Models\Templates\Docs\Player\PlayerDeckDocTrait;
use App\Models\Entities\Battle\DeckEntity;

class PlayerDeckModel extends BasePlayerModel
{
    use PlayerDeckDocTrait;

    const PLAYER_CHARACTER_ID_COUNT = 6;

    /** テーブル名 */
    protected $table = "player_deck";


    /**
     * 新規作成
     * @param int $player_id
     * @param int $deck_id
     * @param int $level
     * @return \App\Models\Daos\Player\PlayerDeckModel
     */
    public static function regist(int $player_id, int $deck_id, int $slot_count=1)
    {
        $self = static::instance();

        $self->player_id = $player_id;
        $self->deck_id = $deck_id;
        $self->slot_count = $slot_count;

        $self->save();

        return $self;
    }


    public function toDeckEntity()
    {
        // TODO
        $Characters = collection(array_values($this->relations));

        $Deck = new DeckEntity($Characters);
        return $Deck;
    }
}