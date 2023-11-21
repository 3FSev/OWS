<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

}
