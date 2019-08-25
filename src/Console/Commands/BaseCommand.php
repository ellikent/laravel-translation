<?php

namespace ellikent\Translation\Console\Commands;

use Illuminate\Console\Command;
use ellikent\Translation\Drivers\Translation;

class BaseCommand extends Command
{
    protected $translation;

    public function __construct(Translation $translation)
    {
        parent::__construct();
        $this->translation = $translation;
    }
}
