<?php

namespace App\Jobs;

use App\Models\Rr;
use App\Models\User;
use App\Models\Notification;
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

        // Get RR records that are pending (not approved or rejected) and created more than 7 days ago
        $admins = User::where('role_id', 2)->get();
        $limitDate = now()->subDays(7);
        $pendingRRs = Rr::whereNull('approved_at')
            ->whereNull('rejected_at')
            ->where('created_at', '<', $limitDate)
            ->get();

        foreach ($pendingRRs as $rr) {
            // Set all quantities of associated items to 0
            foreach ($rr->items as $item) {
                $item->update(['quantity' => 0]);
                $item->update(['status' => 'Request Expired']);
            }

            // Set status to "Request expired"
            $rr->update(['status' => 'Request expired']);

            // Detach items from the pivot table
            $rr->items()->detach();

            Log::info("Expired pending RR record: {$rr->id}");

            foreach ($admins as $admin) {
                $notification = new Notification([
                    'user_id' => $admin->id,
                    'message' => "Request for (RR{$rr->rr_number}) has expired",
                    'url' => url('/admin-create-mrt'),
                    'triggered_by' => '',
                ]);
                $notification->save();
            }

            $rr->rejected_at = now();
        }

    }
}
