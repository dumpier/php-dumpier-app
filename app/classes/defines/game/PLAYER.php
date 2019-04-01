<?php
namespace App\Defines\Game;

class PLAYER
{
    /** 通常プレイヤー */
    const TYPE_NORMAL = 0;

    /** BANG垢 */
    const TYPE_BANG = 1;

    /** テスターアカウント */
    const TYPE_TESTER = 10;

    /** DUMMY */
    const TYPE_DUMMY = 11;


    /** 公開IDの桁数 */
    const PUBLIC_ID_LENGTH = 8;
}