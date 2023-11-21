<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'category_id',
        'item_status_id',
        'unit_cost',
        'freight',
        'extended_cost',
        'deleted_at',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function rrs()
    {
        return $this->belongsToMany(Rr::class, 'item_rr')
            ->withPivot('delivered', 'accepted');
    }

    public function wivs()
    {
        return $this->belongsToMany(Wiv::class, 'item_wiv')
            ->withPivot('quantity');
    }
}
