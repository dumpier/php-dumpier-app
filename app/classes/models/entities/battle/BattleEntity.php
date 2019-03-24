<?php
namespace App\Models\Entities\Battle;


use App\Models\Entities\Battle\Log\BattleLogManageEntity;

class BattleEntity
{
    /** @var DeckEntity 味方デッキ */
    public $ally;

    /** @var DeckEntity 対戦相手のデッキ */
    public $oppenent;

    /** @var BattleLogManageEntity */
    public $logManage;

    /** @var int 現在ラウンド数 */
    public $round = 0;

    /** @var int 現在ラウンドのターン数 */
    public $turn = 0;

}