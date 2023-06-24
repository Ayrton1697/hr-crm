<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\job_posting;
use App\Models\Applicant;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(1)->create();
        job_posting::factory()->count(20)->create();
        Applicant::factory()->count(30)->create();

        $job_postings = job_posting::all();
        Applicant::all()->each(function($applicant) use ($job_postings){
            $applicant->job_postings()->attach(
                $job_postings->random(2)->pluck('id')->toArray()
            );
        });

    }
}
