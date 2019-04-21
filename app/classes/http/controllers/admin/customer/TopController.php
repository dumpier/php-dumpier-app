<?php
namespace App\Http\Controllers\Admin\Customer;

use App\Models\Repositories\Player\Manage\PlayerManageRepository;

class TopController extends \App\Http\Controllers\Admin\Controller
{
    protected $repositories = [
        PlayerManageRepository::class,
    ];

    public function index()
    {
        $PlayerManages = $this->PlayerManage->paging();

        $this->content("PlayerManages", $PlayerManages);
        return $this->response();
    }


}