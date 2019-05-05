<?php
namespace App\Models\Entities\Battle;

use Presto\Core\Traits\Arrayable;

class StatusEntity
{
    use Arrayable;

    // -----------------------------------------------
    // HP、MP、AP
    // -----------------------------------------------
    /** @var int マジックポイント（スキル発動に使用） */
    public $mp = 0;

    /** @var int アクションポイント（攻撃に使用） */
    public $ap = 0;

    /** @var int ヒットポイント */
    public $hp = 0;

    /** @var int シールド */
    public $shield = 0;

    // 自動回復
    /** @var int HP自動回復（最大） */
    public $hp_auto_recovery_max = 0;
    /** @var int HP自動回復（最小） */
    public $hp_auto_recovery_min = 0;

    /** @var int MP自動回復（最大） */
    public $mp_auto_recovery_max = 0;
    /** @var int MP自動回復（最小） */
    public $mp_auto_recovery_min = 0;

    /** @var int AP自動回復（最大） */
    public $ap_auto_recovery_max = 0;
    /** @var int AP自動回復（最小） */
    public $ap_auto_recovery_min = 0;
    // -----------------------------------------------


    // -----------------------------------------------
    // 性格、属性、ポジション
    // -----------------------------------------------
    /** @var int タイプ（Hero、Defender、Survivor） */
    public $type = 0;

    /** @var int 職種（銃士、剣士、騎士、重装備） */
    public $occupation = 0;

    /** @var int 性格（攻撃、防御、総合） */
    public $personality = 0;

    /** @var int 属性（火、水、風） */
    public $attribute = 0;

    /** @var int ポジション（接近、近、中、遠） */
    public $position = 0;
    // -----------------------------------------------


    // -----------------------------------------------
    // 基礎ステータス
    // -----------------------------------------------
    /** @var int 基礎ステータス・力 */
    public $power = 0;
    /** @var int 基礎ステータス・体力 */
    public $stamina = 0;
    /** @var int 基礎ステータス・素早さ */
    public $speed = 0;
    /** @var int 基礎ステータス・知能 */
    public $intellect = 0;
    // -----------------------------------------------



    // -----------------------------------------------
    // 戦闘ステータス
    // -----------------------------------------------
    /** @var int 攻撃力（最大） */
    public $attack_max = 0;
    /** @var int 攻撃力（最小） */
    public $attack_min = 0;

    /** @var int 防御力（最大） */
    public $defence_max = 0;
    /** @var int 防御力（最小） */
    public $defence_min = 0;


    /** @var int 命中値 */
    public $hit_value = 0;
    /** @var int 回避値 */
    public $hit_avoid_value = 0;

    /** @var int クリティカル命中値 */
    public $critical_hit_value = 0;
    /** @var int クリティカル命中回避値 */
    public $critical_hit_avoid_value = 0;

    /** @var int ダメージ反射 */
    public $hp_reflect_damage_rate = 0;

    /** @var int HP吸収 */
    public $hp_sorption_value = 0;

    /** @var int 状態異常耐性 */
    public $debuff_resistance_value = 0;
    // -----------------------------------------------

    public function toArray()
    {
        $array = [];
        foreach ($this as $key=>$val)
        {
            $array[$key] = $val;
        }

        return $array;
    }
}