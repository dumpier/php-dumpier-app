<?php
namespace App\Consoles;

class Kanel
{
    protected $commands = [
        'sample'=>\App\Consoles\Commands\SampleCommand::class,

        'db'=>\Presto\Consoles\Commands\DatabaseCommand::class,
        'facade'=>\Presto\Consoles\Commands\FacadeCommand::class,
        'migrate'=>\Presto\Consoles\Commands\MigrateCommand::class,
        'seed'=>\Presto\Consoles\Commands\SeedCommand::class,
    ];


    /** 実行したShellファイル */
    protected $shell;

    /** 実行したフォルダ */
    protected $workDir;

    /** コマンド名 */
    protected $signature;

    /** コマンドへの引数 */
    protected $arguments;


    public function __construct(array $args)
    {
        $this->shell = array_shift($args);
        // $this->workDir = array_shift($args);

        if(empty($args))
        {
            throw new \Exception("コマンド名を入力してください。" . $this->getCommandListToString());
        }

        $this->signature = array_shift($args);
        $this->arguments = $args;
    }


    public function handler()
    {
        $signature = $this->signature;
        $arguments = $this->arguments;

        if(empty($this->commands[$signature]))
        {
            throw new \Exception("不明コマンド[{$signature}]". $this->getCommandListToString());
        }

        /* @var $class \Command */
        $class = app($this->commands[$signature]);

        $class->handler($arguments);
    }


    private function getCommandListToString()
    {
        return PHP_EOL."  - ". implode(PHP_EOL."  - ", array_keys($this->commands));
    }
}