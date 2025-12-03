<?php

namespace App\Console\Commands;

use App\Models\Hobby;
use Illuminate\Console\Command;

use function Symfony\Component\Clock\now;

class CreateHobbyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:hobby';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'create a new hobby';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $hobby = Hobby::factory()->create();

        $this->info('New hobby created = ' . $hobby->name);
    }
}
