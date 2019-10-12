<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->truncate();
        factory(App\Article::class)->times(50)->create();
    }
}