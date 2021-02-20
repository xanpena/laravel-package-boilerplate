<?php

namespace Xanpena\LaravelPackageBoilerplate\Console;

use Illuminate\Console\Command;

class ExamplenCommand extends Command
{
    public $signature = 'example';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
