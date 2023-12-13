<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'category_id',
        'status',
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
        return $this->belongsToMany(Rr::class, 'item_rr');
    }

    public function wivs()
    {
        return $this->belongsToMany(Wiv::class, 'item_wiv')
            ->withPivot('quantity');
    }

    public function mrts()
    {
        return $this->belongsToMany(Mrt::class, 'item_mrt')
            ->withPivot('usable');
    }
}
