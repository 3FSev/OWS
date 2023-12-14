<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    use HasFactory;

    protected $table = 'activity';

    protected $fillable = [
        'user_id',
        'name',
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
