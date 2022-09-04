<?php

namespace Wit3\Locker\Commands;

use Illuminate\Console\Command;

class LockerCommand extends Command
{
    public $signature = 'laravel-model-lock';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
