<?php

namespace SimonBarrettACT\LiveTable\Commands;

use Illuminate\Console\Command;

class LiveTableCommand extends Command
{
    public $signature = 'live-table';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
