<?php
namespace App\Consoles\Commands;

use App\Services\TestService;

class DatabaseCommand extends \Command
{
    protected $services = [
        TestService::class,
    ];

    public function handler()
    {
        $this->testService->test();


    }
}