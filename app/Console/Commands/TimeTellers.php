<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TimeTellers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:timeTellers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to tell the time';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $time = now();
        $this->info($time);
    }
}
