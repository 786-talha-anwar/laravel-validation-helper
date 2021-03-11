<?php

namespace TalhaAnwar\LaravelValidationHelper\Tests;

use Orchestra\Testbench\TestCase;
use TalhaAnwar\LaravelValidationHelper\LaravelValidationHelperServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelValidationHelperServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
