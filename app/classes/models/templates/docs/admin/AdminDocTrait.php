<?php
namespace App\Models\Templates\Docs\Admin;

/**
 */
trait AdminDocTrait
{
    /** 項目一覧 */
    protected $properties = [
        "id",
        "department_id",
        "role_id",
        "name",
        "email",
        "email_verified_at",
        "password",
        "remember_token",
        "created",
        "updated",
    ];


    /** @var int  */
    public $id = 0;

    /** @var int 所属ID */
    public $department_id = 0;

    /** @var int Role */
    public $role_id = 0;

    /** @var string 名前 */
    public $name = "";

    /** @var string Email */
    public $email = "";

    /** @var string メール確認日時 */
    public $email_verified_at = "";

    /** @var string パスワード */
    public $password = "";

    /** @var string  */
    public $remember_token = "";

    /** @var string  */
    public $created = "";

    /** @var string  */
    public $updated = "";

}
