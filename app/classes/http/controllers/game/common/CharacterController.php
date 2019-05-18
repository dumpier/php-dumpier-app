<?php
namespace App\Http\Controllers\Game\Common;

use App\Models\Repositories\Master\MasterCharacterOriginalRepository;

class CharacterController extends \App\Http\Controllers\Game\Controller
{
    protected $repositories = [
        MasterCharacterOriginalRepository::class,
    ];

    public function index()
    {
        $Characters = $this->MasterCharacterOriginal->paging();

        $this->content("characters", $Characters->toArray());
        $this->content("count", $Characters->count());
        return $this->response();
    }

}