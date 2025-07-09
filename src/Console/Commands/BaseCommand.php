<?php

namespace Kanhaiyanigma05\Translation\Console\Commands;

use Illuminate\Console\Command;
use Kanhaiyanigma05\Translation\Drivers\Translation;

class BaseCommand extends Command
{
    protected $translation;

    public function __construct(Translation $translation)
    {
        parent::__construct();
        $this->translation = $translation;
    }
}
