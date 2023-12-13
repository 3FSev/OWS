<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Wiv extends Model
{
    use HasFactory;

    protected $table = 'wiv';

    public $timestamps = false;

    public function items()
    {
        return $this->belongsToMany(Item::class, 'item_wiv')
            ->withPivot('quantity');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function generateUniqueIdentifier()
    {
        $year = now()->format('y');

        $latestIdentifier = DB::table('wiv')
            ->where('wiv_number', 'like', $year . '-%')
            ->max('wiv_number');

        $numericPart = (int)substr($latestIdentifier, -3);
        $numericPart++;

        $newIdentifier = $year . '-' . str_pad($numericPart, 3, '0', STR_PAD_LEFT);

        $this->attributes['wiv_number'] = $newIdentifier;
    }

}
