<?php

namespace EnricoDeLazzari\HtmlTableToArray\Commands;

use Illuminate\Console\Command;

class HtmlTableToArrayCommand extends Command
{
    public $signature = 'laravel-html-table-to-array';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
