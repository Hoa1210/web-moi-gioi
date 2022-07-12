<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
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

        for ($i = 1; $i < 10; $i++ ){
            $arr[] = [
                'name' => $faker->word(),
            ];

            if($i % 2 === 0){
                Language::insert($arr);
                $arr = [];
            }
        }
    }
}
