<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;

    protected $table = 'job_postings';

    public function user(){
        // return $this->belongsTo(User::class);
        return $this->belongsToMany(User::class, 'applicant_job_posting');
    }

    public function applicants(){
        return $this->belongsToMany(Applicant::class,'applicant_job_posting', 'job_posting_id', 'applicant_id')->withPivot('status');
    }

    protected $fillable = [
        'user_id',
        'requirements',
        // 'phone',
        // 'linkedin_url',
        // 'cv_path',
    ];
}
