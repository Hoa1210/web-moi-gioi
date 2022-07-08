<?php

namespace Database\Seeders;

use App\Models\Companies;
use App\Models\Language;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Companies::factory(10)->create();
        Language::factory(10)->create();
        $this->call(UserSeeder::class);
    }
}
