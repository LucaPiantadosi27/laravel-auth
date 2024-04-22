<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
    for ($i=0; $i < 6; $i++) { 

        $newPost = new Post();

        $newPost->description = $faker->paragraph();
        $newPost->src = $faker->imageUrl(640, 480, 'abstract', true);
        $newPost->link = 'https://github.com/';

        }


    }
}
