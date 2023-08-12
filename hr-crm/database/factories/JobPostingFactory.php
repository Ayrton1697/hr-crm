<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\User;

class JobPostingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $currencies = ['USD','EUR','ARS'];
        $status = ['active', 'inactive'];
        $user_ids = User::all()->pluck('id')->toArray();
        $prefix = ['Jr', 'Ssr', 'Sr'];
        $hiring_modality = ['contractor','part-time','full-time'];
        $seniority = ['Sr','Ssr','Jr'];
        $work_modality = ['remote','office'];
        $english_level = ['Beginner','Intermediate','Advanced'];
        $job = ['Fullstack', 'Data Engineer', 'Data Scientist'];
        $name = Arr::random($prefix) . ' ' . Arr::random($job);

        return [
            'name' => $name,
            'company_name' => $this->faker->company(),
            // 'description' => $this->faker->sentence(5),
            'location' => $this->faker->country(),
            'currency' => Arr::random($currencies),
            // $table->payment_range(
            'status' => Arr::random($status),
            'hiring_modality' => Arr::random($hiring_modality),
            'seniority' => Arr::random($seniority),
            'work_modality' => Arr::random($work_modality),
            'english_level' => Arr::random($english_level),
           'created_at' => $this->faker->date(),
           'updated_at' => $this->faker->date(),
        //    'user_id' => Arr::random($user_ids) //randomElement($user_ids);
           'user_id' => $this->faker->randomElement($user_ids)
        ];
    }
}
