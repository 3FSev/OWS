<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $table ='request';

    protected $fillable = [
        'user_id',
        'request_type',
        'request_status',
        'details',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
