<?php

namespace App\Jobs;

use App\Models\Mrt;
use App\Models\User;
use App\Models\Notification;
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

       // Delete MRT records older than 7 days
       $admins = User::where('role_id', 2)->get();
       $limitDate = now()->subDays(7);
       $expiredMRTs = Mrt::where('created_at', '<', $limitDate)
        ->whereNull('approved_at')
        ->whereNull('rejected_at')
        ->whereNull('expired_at')
        ->get();

       foreach ($expiredMRTs as $mrt) {
           foreach ($mrt->items as $item) {
               $item->increment('quantity', 1);
           }

           // Detach items from the pivot table
           $mrt->items()->detach();

           // Delete the MRT record
           $mrt->update(['expired_at' => now()]);

           foreach ($admins as $admin) {
            $notification = new Notification([
                'user_id' => $admin->id,
                'message' => "Request for (RR{$mrt->mrt_number}) has expired",
                'url' => url('/admin-create-mrt'),
                'triggered_by' => '',
            ]);
            $notification->save();
        }
       }
    }
}
