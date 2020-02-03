<?php

use App\Article;
use App\Comment;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Article::class, 1000)->create();
        Article::all()->each(function ($article) {
            $article->comments()->saveMany(factory(Comment::class, 3)->make());
        });
    }
}
