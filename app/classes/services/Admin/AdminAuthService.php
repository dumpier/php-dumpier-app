<?php
namespace App\Services\Admin;

use App\Defines\AUTH;
use App\Models\Repositories\Admin\AdminRepository;
use App\Exceptions\AppException;

class AdminAuthService extends \Service
{
    protected $repositories = [
        AdminRepository::class,
    ];


    /**
     * ログイン中かの判定
     * @return boolean
     */
    public function authorize()
    {
        $Admin = session()->get(AUTH::KEY_ADMIN);

        if(empty($Admin))
        {
            return false;
        }

        return true;
    }


    /**
     * ログイン処理
     * @param string $type
     * @param string $email
     * @param string $password
     */
    public function login(string $type=AUTH::GOOGLE, string $email, string $password="")
    {
        $Admin = $this->Admin->getByEmail($email);

        if(empty($Admin))
        {
            throw new AppException("ログインエラー");
        }

        switch ($type)
        {
            case AUTH::GOOGLE:
                break;

            case AUTH::DEFAULT:
                if( $Admin->password !== encrypter($password))
                {
                    throw new AppException("ログインエラー");
                }

                break;
        }

        session()->set(AUTH::KEY_ADMIN, $Admin);
    }


    /**
     * ログアウト処理
     */
    public function logout()
    {
        session()->delete(AUTH::KEY_ADMIN);
    }

}