<?php
namespace App\Defines\Game;


class BUFF
{
    /** ステータス操作 */
    const TYPE_CHANGE_STATUS = 1000;

    /** 状態異常をクリア */
    const TYPE_CLEAR_BUFF = 2000;

    /** 状態異常の操作（） */
    const TYPE_CHANGE_BUFF = 3000;



    /** 命中 */
    const TYPE_HIT = 1;

    /** 会心命中 */
    const TYPE_CRITICAL_HIT = 2;

    /** 回避 */
    const TYPE_AVOID = 3;


    /** 動けない */
    const TYPE_UNACTABLE = 11;
    /** 眠り */
    const TYPE_SLEEP = 12;
    /** 凍結、氷結 */
    const TYPE_FROZEN = 13;


    /** 毒 */
    const TYPE_POISON = 21;
    /** 火傷 */
    const TYPE_BURN = 25;
    /** 出血 */
    const TYPE_BLEEDING = 26;

}