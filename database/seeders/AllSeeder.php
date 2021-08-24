<?php

namespace Database\Seeders;

use App\Models\Banner;
use App\Models\BannerPosition;
use App\Models\Blog;
use App\Models\Komentar;
use App\Models\ReplyKomen;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class AllSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        // user create
        User::create([
            'name' => 'admin',
            'email' => 'admindaiton2021@gmail.com',
            'password' => Hash::make('123123'),
            'role' => 'admin'
        ]);

        for ($i = 0; $i < 10; $i++) {
            Blog::create([
                'user_id' => 1,
                'title' =>  $faker->sentence($nbWords = 6, $variableNbWords = true),
                'thumbnail' => 'http://lorempixel.com/400/200/',
                'body' => $faker->paragraph($nbSentences = 120, $variableNbSentences = true)
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            Komentar::create([
                'blog_id' => $i,
                'nama' => $faker->name,
                'email' => $faker->email,
                'body' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true)
            ]);
        }

        for ($i = 1; $i < 6; $i++) {
            ReplyKomen::create([
                'user_id' => 1,
                'komentar_id' => $i,
                'body' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true)

            ]);
        }

        BannerPosition::create([
            'nama' => 'header',
        ]);
        BannerPosition::create([
            'nama' => 'promotion',
        ]);

        for ($i = 0; $i < 4; $i++) {
            for ($j = 1; $j < 3; $j++) {
                Banner::create([
                    'banner_position_id' => $j,
                    'title' =>
                    $faker->sentence($nbWords = 6, $variableNbWords = true),
                    'subtitle' =>
                    $faker->sentence($nbWords = 10, $variableNbWords = true),
                    'image' => 'https://lorempixel.com/400/200/sports/',
                ]);
            }
        }
    }
}
