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
         // Find WIV records older than 7 days
         $limitDate = now()->subDays(7);
         
         $expiredWivs = Wiv::where('created_at', '<', $limitDate)
         ->whereNull('approved_at')
         ->whereNull('rejected_at')
         ->get();

     foreach ($expiredWivs as $wiv) {
         // Set the quantity for each item associated with the WIV
         foreach ($wiv->items as $item) {
             // You can set the quantity to any specific value you want
             $item->update(['quantity' => 1]);
         }

         // Detach all items related to the WIV
         $wiv->items()->detach();

         // Delete the WIV record
         $wiv->delete();
     }
    }
}
