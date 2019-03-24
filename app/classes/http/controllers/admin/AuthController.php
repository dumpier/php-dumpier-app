<?php
namespace App\Http\Controllers\Admin;

use App\Defines\AUTH;
use App\Services\Admin\AdminAuthService;

class AuthController extends \App\Http\Controllers\Admin\Controller
{
    protected $services = [
        AdminAuthService::class,
    ];

    protected $repositories = [];


    // ログイン画面
    public function index()
    {
        return $this->response();
    }


    // ログイン処理
    public function login()
    {
        $email = input("email");
        $password = input("password");

        $this->AdminAuthService->login(AUTH::DEFAULT, $email, $password);

        return $this->redirect("/admin/");
    }


    // ログアウト処理
    public function logout()
    {
        $this->AdminAuthService->logout();

        return $this->redirect("/admin/");
    }


    // GoogleAuthのCallback
    public function google()
    {
        $email = input("email");

        $this->AdminAuthService->login(AUTH::GOOGLE, $email);

        return $this->response();
    }
}