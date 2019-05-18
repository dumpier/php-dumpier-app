<?php
namespace App\Defines\Game;


class BUFF
{
    /** 命中 */
    const TYPE_HIT = 1;
    /** 絶対発生 */
    const TYPE_ABSOLUTE = 2;
    /** 行動不能 */
    const TYPE_INACTIVE = 3;


    /** ステータスアップ */
    const TYPE_STATUS_UP = 21;
    /** ステータスダウン */
    const TYPE_STATUS_DOWN = 22;

    /** 状態異常の回避 */
    const TYPE_AVOID_BUFF = 30;
    /** 状態異常の回復 */
    const TYPE_CHANGE_BUFF = 40;




}