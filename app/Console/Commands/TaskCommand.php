<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class TaskCommand extends Command
{
    protected $signature = 'app:task-command';

    protected $description = 'Command description';

    public function handle()
    {
        Log::info('Vazifa 17:00da bajarildi !!!');
    }
}
