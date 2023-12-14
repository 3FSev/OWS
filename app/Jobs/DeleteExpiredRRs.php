<?php

namespace App\Jobs;

use App\Models\Rr;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class DeleteExpiredRRs implements ShouldQueue
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
        // Check if approved_at or rejected_at is not null and prevent deletion
        if (Rr::whereNotNull('approved_at')->orWhereNotNull('rejected_at')->exists()) {
            Log::info('Deletion of old RR records stopped because approved_at or rejected_at is not null.');
            return;
        }

        // Get RR records that are pending (not approved or rejected) and created more than 7 days ago
        $limitDate = now()->subDays(7);
        $pendingRRs = Rr::whereNull('approved_at')
            ->whereNull('rejected_at')
            ->where('created_at', '<', $limitDate)
            ->get();

        foreach ($pendingRRs as $rr) {
            // Set all quantities of associated items to 0
            foreach ($rr->items as $item) {
                $item->update(['quantity' => 0]);
            }

            // Set status to "Request expired"
            $rr->update(['status' => 'Request expired']);

            // Detach items from the pivot table
            $rr->items()->detach();

            // Delete the RR record
            $rr->delete();

            Log::info("Expired pending RR record: {$rr->id}");
        }

    }
}
