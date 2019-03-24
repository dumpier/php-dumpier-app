<?php
namespace App\Defines\Game;


class SKILL
{
    /** ターン開始時発動 */
    const ACTION_TIMING_TURN_START = 10;
    /** ターン終了後発動 */
    const ACTION_TIMING_TURN_END = 11;

    /** 行動開始時発動 */
    const ACTION_TIMING_ACTION_START = 20;
    /** 行動終了後発動 */
    const ACTION_TIMING_ACTION_END = 21;

    /** ダメージ計算前発動 */
    const ACTION_TIMING_BEFORE_DAMAGE = 30;
    /** ダメージ計算後発動 */
    const ACTION_TIMING_AFTER_DAMAGE = 31;

}