<?php
namespace App\Models\Entities\Battle;

class StatusEntity
{
    // -----------------------------------------------
    // HP、MP、AP
    // -----------------------------------------------
    /** @var int マジックポイント（スキル発動に使用） */
    public $mp = 0;

    /** @var int アクションポイント（攻撃に使用） */
    public $ap = 0;

    /** @var int ヒットポイント */
    public $hp = 0;


    // 自動回復
    /** @var int HP自動回復（最大） */
    public $auto_recovery_hp_max = 0;
    /** @var int HP自動回復（最小） */
    public $auto_recovery_hp_min = 0;

    /** @var int MP自動回復（最大） */
    public $auto_recovery_mp_max = 0;
    /** @var int MP自動回復（最小） */
    public $auto_recovery_mp_min = 0;

    /** @var int AP自動回復（最大） */
    public $auto_recovery_ap_max = 0;
    /** @var int AP自動回復（最小） */
    public $auto_recovery_ap_min = 0;
    // -----------------------------------------------


    // -----------------------------------------------
    // 性格、属性、ポジション
    // -----------------------------------------------
    /** @var int 性格（攻撃、防御、総合） */
    public $personality = 0;

    /** @var int 属性 */
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


    /** @var int 命中 */
    public $hit_value = 0;

    /** @var int 回避 */
    public $avoid_value = 0;

    /** @var int クリティカル命中 */
    public $critical_hit_value = 0;

    /** @var int クリティカル命中抑制値 */
    public $critical_hit_restraint_value = 0;

    /** @var int ダメージ反射 */
    public $hp_reflect_damage = 0;

    /** @var int HP吸収 */
    public $hp_sorption_value = 0;

    /** @var int 状態異常耐性 */
    public $debuff_resistance_value = 0;
    // -----------------------------------------------

}