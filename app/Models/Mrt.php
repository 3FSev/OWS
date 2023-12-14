<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mrt extends Model
{
    use HasFactory;

    protected $table = 'mrt';

    public $timestamps = true;

    protected $fillable = [
        'mrt_number',
        'received_at',
        'mrt_date',
        'user_id',
        'created_by',
        'approved_by',
        'approved_at',
        'rejected_at',
        'rejected_by',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_mrt')
            ->withPivot('usable');
    }

    public function generateUniqueIdentifier()
    {
        $year = now()->format('y');

        $latestIdentifier = DB::table('mrt')
            ->where('mrt_number', 'like', $year . '-%')
            ->max('mrt_number');

        $numericPart = (int)substr($latestIdentifier, -3);
        $numericPart++;

        $newIdentifier = $year . '-' . str_pad($numericPart, 3, '0', STR_PAD_LEFT);

        $this->attributes['mrt_number'] = $newIdentifier;
    }
}
