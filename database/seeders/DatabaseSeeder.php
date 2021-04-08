<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      /* Storage::deleteDirectory('posts'); */

      Storage::makeDirectory('posts');

      $this->call(RolSeeder::class);


      $this->call(UserSeeder::class);

      Category::factory(10)->create();
      Tag::factory(20)->create();

      $this->call(PostSeeder::class);

    }
}
