<?php

namespace ronylicha\CheckBoxImages\Commands;

use Illuminate\Console\Command;

class CheckBoxImagesCommand extends Command
{
    public $signature = 'checkboximages';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
