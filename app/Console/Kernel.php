<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Log;

class Kernel
{
//    protected $commend = [];

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('task:daily')->dailyAt('17:00');
    }

}
