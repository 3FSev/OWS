<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'district_id',
        'department_id',
        'password',
        'approved_at',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function requests()
    {
        return $this->hasMany(EmployeeRequest::class);
    }

    public function wivs()
    {
        return $this->hasMany(Wiv::class);
    }

    public function mrts()
    {
        return $this->hasMany(Mrt::class);
    }

    public function activities()
    {
        return $this->hasMany(UserActivity::class);
    }

    public function routeNotificationForDatabase()
    {
        return $this->id;
    }

    public function routeNotificationForMail()
    {
        return $this->email;
    }
}
