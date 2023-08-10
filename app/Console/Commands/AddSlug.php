<?php

namespace App\Console\Commands;

use App\Models\Job;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class AddSlug extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:slug';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add slug to an existing jobs table';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
                   
        // Update all jobs in the database with a generated slug from their title
Job::chunk(100, function ($jobs) {
    foreach ($jobs as $job) {
        $slug = Str::slug($job->title).'-'.uniqid();
        $job->slug = $slug;
        $job->save();
    }
});

        return Command::SUCCESS;
    }
}
