<?php
namespace App\Http\Controllers\Admin;

use App\Models\Repositories\Player\PlayerDeckRepository;

class AuthController extends \App\Http\Controllers\Admin\Controller
{
    protected $repositories = [
        PlayerDeckRepository::class,
    ];

    public function index()
    {
        return $this->response();
    }


}