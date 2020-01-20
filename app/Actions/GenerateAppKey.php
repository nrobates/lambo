<?php

namespace App\Actions;

use App\Shell;

class GenerateAppKey
{
    protected $shell;

    public function __construct(Shell $shell)
    {
        $this->shell = $shell;
    }

    public function __invoke()
    {
        $this->shell->execInProject('php artisan key:generate');
        app('console')->info('[ artisan ] application key has been set.');
    }
}
