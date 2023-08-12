<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Filament\Models\Contracts\FilamentUser;

class User extends Authenticatable implements FilamentUser
{
    use HasApiTokens, HasFactory, Notifiable;

    public function canAccessFilament(): bool
    {
        return true; //str_ends_with($this->email, '@gmail.com') ;
    }

    public function JobPosting(){

        // return $this->hasMany(JobPosting::class);
        return $this->belongsToMany(JobPosting::class,'applicant_job_posting');
    
    }

    public function Applicant(){

        return $this->belongsToMany(Applicant::class,'applicant_job_posting', 'user_id', 'applicant_id');
    
    }
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role' => 'user'
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
    ];
}
