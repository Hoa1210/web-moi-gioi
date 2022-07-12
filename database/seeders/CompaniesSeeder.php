<?php

namespace Database\Seeders;

use App\Models\Companies;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
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
                'name' => $faker->company,
                'address' => $faker->address,
                'address2' => $faker->buildingNumber,
                'district' => $faker->city,
                'city' => $faker->city,
                'country' => 'Vietnam',
                'zipcode' => $faker->postcode,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'logo' => $faker->imageUrl(),
            ];

            if($i % 2 === 0){
                Companies::insert($arr);
                $arr = [];
            }
        }
    }
}
