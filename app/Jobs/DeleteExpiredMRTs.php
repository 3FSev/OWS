<?php

namespace App\Jobs;

use App\Models\Mrt;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class DeleteExpiredMRTs implements ShouldQueue
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
        if (Mrt::whereNotNull('approved_at')->orWhereNotNull('rejected_at')->exists()) {
            Log::info('Deletion of old MRT records stopped because approved_at or rejected_at is not null.');
            return;
        }


       // Delete MRT records older than 7 days
       $limitDate = now()->subDays(7);
       $expiredMRTs = Mrt::where('created_at', '<', $limitDate)->get();

       foreach ($expiredMRTs as $mrt) {
           // Revert changes to item quantities
           foreach ($mrt->items as $item) {
               $item->increment('quantity', 1);
           }

           // Detach items from the pivot table
           $mrt->items()->detach();

           // Delete the MRT record
           $mrt->delete();
       }
    }
}
