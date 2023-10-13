<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'category_id',
        'item_status_id',
        'price',
        'freight',
        'extended_cost',
        'deleted_at',
    ];
}
