<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        Schema::disableForeignKeyConstraints();
        Post::truncate();
        Schema::enableForeignKeyConstraints();

        factory(Post::class, 30)->create();
    }
}
