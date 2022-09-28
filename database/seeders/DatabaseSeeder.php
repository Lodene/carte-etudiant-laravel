<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Entreprise;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str; 

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::truncate();
        Post::truncate();
        Entreprise::truncate(); 

        $user = User::factory(10)->create([
            'first_name' => Str::random(10),
            'last_name' => Str::random(10),
        ]);

        
        $entreprise = Entreprise::factory(10)->create();
        
        $faim = Category::factory()->create([
            'id' => 1,
            'name' => 'Faim'
        ]);

        $soif = Category::factory()->create([
            'id' => 2,
            'name' => 'Soif'
        ]);

        $autre = Category::factory()->create([
            'id' => 3,
            'name' => 'Evenement'
        ]);  
        
        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[0]->id,
            'category_id' => $faim['id']
        ]);

        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[1]->id,
            'category_id' => $soif['id']
        ]);

        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[2]->id,
            'category_id' => $autre['id']
        ]);

        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[3]->id,
            'category_id' => $faim['id']
        ]);

        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[4]->id,
            'category_id' => $soif['id']
        ]);

        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[5]->id,
            'category_id' => $autre['id']
        ]);

        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[6]->id,
            'category_id' => $faim['id']
        ]);

        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[7]->id,
            'category_id' => $soif['id']
        ]);

        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[8]->id,
            'category_id' => $autre['id']
        ]);

        $usr = Post::factory()->create([
            'entreprise_id' => $entreprise[9]->id,
            'category_id' => $autre['id']
        ]);
    }
}
