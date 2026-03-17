<?php

declare(strict_types=1);

namespace Tests;

use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use TailwindMerge\Laravel\TailwindMergeServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    use InteractsWithViews;

    public static mixed $latestResponse = null; // fix for testbench v9.x

    protected function getPackageProviders($app): array
    {
        return [
            TailwindMergeServiceProvider::class,
        ];
    }
}
