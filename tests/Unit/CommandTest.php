<?php

namespace BruceBrophy\LaravelBlog\Tests\Unit;

use BruceBrophy\LaravelBlog\Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

class CommandTest extends TestCase
{
    public function testCommandCanPublishViews()
    {
        $this->withoutMockingConsoleOutput();

        if (File::exists(resource_path('/views/vendor/laravel-blog'))) {
            File::deleteDirectory(resource_path('/views/vendor/laravel-blog'));
        }

        $this->assertFalse(File::exists(resource_path('/views/vendor/laravel-blog')));

        Artisan::call('blog:publish tailwind');

        $this->assertSame('Views have been published'.PHP_EOL, Artisan::output());

        $this->assertTrue(File::exists(resource_path('/views/vendor/laravel-blog')));
    }
}
