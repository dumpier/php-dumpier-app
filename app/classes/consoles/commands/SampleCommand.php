<?php
namespace App\Consoles\Commands;

use App\Services\TestService;

class SampleCommand extends \Command
{
    protected $services = [
        TestService::class,
    ];

    public function handler()
    {
        $this->testService->test();


    }
}