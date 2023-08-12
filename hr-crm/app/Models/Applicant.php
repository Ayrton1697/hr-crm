<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    public function JobPostings(){
        return $this->belongsToMany(JobPosting::class,'applicant_job_posting','applicant_id', 'job_posting_id');
    }

    public function users(){
        return $this->belongsToMany(User::class, 'applicant_job_posting', 'applicant_id', 'user_id');
    }

       /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'linkedin_url',
        'cv_path',
    ];
}
