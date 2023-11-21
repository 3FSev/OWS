<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    ];

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_rr')->withPivot('delivered', 'accepted');
    }
}
