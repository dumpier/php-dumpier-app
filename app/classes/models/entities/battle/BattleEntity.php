<?php
namespace App\Models\Entities\Battle;


class BattleEntity
{
    /** @var DeckEntity 味方デッキ */
    public $ally;

    /** @var DeckEntity 対戦相手のデッキ */
    public $oppenent;

    /** @var int 現在ラウンド数 */
    public $round = 0;

    /** @var int 現在ラウンドのターン数 */
    public $turn = 0;


}