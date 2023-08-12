<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\JobPosting;
use App\Models\Applicant;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(5)->create();
        JobPosting::factory()->count(20)->create();
        Applicant::factory()->count(30)->create();
        $users = User::all()->pluck('id')->toArray();
        $jobPostings = JobPosting::all();
        Applicant::all()->each(function($applicant) use ($jobPostings,$users){
            $applicant->jobpostings()->attach(
                $jobPostings->random(1)->pluck('id')
                ,
                ['user_id' => User::all()->random(1)->pluck('id')->first()]
            );
       
        });

    }
}
