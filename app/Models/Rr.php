<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rr extends Model
{
    use HasFactory;

    protected $table = 'rr';

    public $timestamps = false;

    protected $fillable = [
        'rr_number',
        'rr_date',
        'supplier',
        'address',
        'riv',
        'riv_date',
        'cs',
        'cs_date',
        'aoc',
        'aoc_date',
        'po',
        'po',
        'cv',
        'cv_date',
        'dr',
        'dr_date',
        'inv',
        'inv_date',
        'or',
        'or_date',
        'created_by',
        'approved_by',
        'approved_at',
        'rejected_at',
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_rr');
    }

    public function generateUniqueIdentifier()
    {
        $year = now()->format('y');

        $latestIdentifier = DB::table('rr')
            ->where('rr_number', 'like', $year . '-%')
            ->max('rr_number');

        $numericPart = (int)substr($latestIdentifier, -3);
        $numericPart++;

        $newIdentifier = $year . '-' . str_pad($numericPart, 3, '0', STR_PAD_LEFT);

        $this->attributes['rr_number'] = $newIdentifier;
    }
}
