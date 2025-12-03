<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RefreshDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh:db';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'migrate fresh and seed database';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('migrate:fresh', ['--seed' => true]);
        $this->info('database refreshed and seeded!');
    }
}
