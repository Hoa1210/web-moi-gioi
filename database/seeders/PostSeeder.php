<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr = [];

        $faker = \Faker\Factory::create();
        $user  = User::query()->pluck('id')->toArray();
        $companies = Companies::query()->pluck('id')->toArray();

        for ($i = 1; $i <= 10;$i++){
            $arr[] = [
                'users_id' => $user[array_rand($user)],
                'companies_id' =>  $companies[array_rand($companies)],
                'job_title' => $faker->jobTitle,
                'district' => $faker->streetAddress,
                'city' => $faker->company,
                'remote' => 12,
                'is_parttime' => '12',
                'min_salary' => 23,
                'max_salary' => 23,
                'requirement' => 'abc',
                'currency_salary' => 1,
                'start_date' => null,
                'end_date' => null,
                'number_applicants' => null,
                'status' => 0,
                'slug' => $faker->slug,
            ];
            if($i % 2 === 0){
                Post::insert($arr);
                $arr = [];
            }
        }
    }
}
