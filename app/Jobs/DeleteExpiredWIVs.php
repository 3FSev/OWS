<?php

namespace App\Jobs;

use App\Models\Wiv;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class DeleteExpiredWIVs implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        // Delete WIV records older than 7 days
        if (Wiv::whereNotNull('approved_at')->orWhereNotNull('rejected_at')->exists()) {
            Log::info('Deletion of old WIV records stopped because approved_at or rejected_at is not null.');
            return;
        }

        $limitDate = now()->subDays(7);

        Wiv::where('created_at', '<', $limitDate)
            ->whereNull('approved_at')
            ->whereNull('rejected_at')
            ->delete();

        Log::info('Deleted old WIV records.');
    }
}
