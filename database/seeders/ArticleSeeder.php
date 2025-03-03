<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->truncate(); 
        Article::factory(5)->create();
        Article::insert([
            [
              'title'       => 'First article',
              'description' => 'this is the first article description ',
              'date'        => now(),
              'created_at'  => now(),
              'updated_at'  => now(),
            ] ,

            [
              'title'       => 'second article',
              'description' => 'this is the second article description ',
              'date'        => now(),
              'created_at'  => now(),
              'updated_at'  => now(),
            ]
        ]);
        
    }
}
