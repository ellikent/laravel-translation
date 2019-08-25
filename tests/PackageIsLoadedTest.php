<?php

namespace ellikent\Translation\Tests;

use Orchestra\Testbench\TestCase;

class PackageIsLoadedTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return ['ellikent\Translation\TranslationServiceProvider'];
    }

    /** @test */
    public function the_translation_pacakage_is_loaded()
    {
        $this->assertArrayHasKey('ellikent\Translation\TranslationServiceProvider', app()->getLoadedProviders());
    }
}
