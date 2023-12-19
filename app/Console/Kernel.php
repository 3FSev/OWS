<?php

namespace App\Console;

use App\Jobs\DeleteExpiredRRs;
use App\Jobs\DeleteExpiredMRTs;
use App\Jobs\DeleteExpiredWIVs;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->job(new DeleteExpiredWIVs)->everyMinute();
        $schedule->job(new DeleteExpiredMRTs)->everyMinute();
        $schedule->job(new DeleteExpiredRRs)->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
