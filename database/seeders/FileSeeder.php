<?php

namespace Database\Seeders;

use App\Enums\FileRoleEnum;
use App\Models\File;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
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

        $user = User::query()->pluck('id')->toArray();
        $post = Post::query()->pluck('id')->toArray();
        for ($i = 1; $i < 10; $i++){
            $arr[] = [
                'user_id' => $user[array_rand($user)],
                'post_id' => $post[array_rand($post)],
                'link' => $faker->text,
                'type' => $faker->randomElement(FileRoleEnum::getValues())
            ];

            if($i % 2 === 0){
                File::insert($arr);
                $arr = [];
            }
        }
    }
}
