<?php

namespace BruceBrophy\LaravelBlog\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class PublishViews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:publish 
					{ ui : The UI library (tailwind, bootstrap) }';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish blog view resources';

    public function handle(Filesystem $filesystem)
    {
        if (! in_array($this->argument('ui'), ['tailwind', 'bootstrap'])) {
            throw new \InvalidArgumentException('Invalid UI preset.');
        }

        $uiLibrary = $this->argument('ui');
        $filesystem->copyDirectory(__DIR__.'/../../resources/views/'.$uiLibrary, resource_path('views/vendor/laravel-blog'));

        $this->info('Views have been published');
    }
}
