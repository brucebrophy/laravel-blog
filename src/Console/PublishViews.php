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
	protected $signature = 'blog:publish {--ui=tailwind}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Publish blog view resources';

	public function handle(Filesystem $filesystem)
	{
		$uiLibrary = $this->option('ui');
		$filesystem->copyDirectory(__DIR__.'/../../resources/views/' . $uiLibrary . '/blog', resource_path('views/vendor/laravel-blog'));

		$this->info('Views have been published');
	}
}