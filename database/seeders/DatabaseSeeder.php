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
        // User::truncate();
        // Post::truncate();
        // Entreprise::truncate(); 

        $user = User::factory(10)->create();

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

        $z = 1;
        for ($i=15; $i < 25; $i++) { 
            
            $user = User::factory()->create([
                'entreprise_id' => $i,
                'grade' => 'entreprise'
            ]);

            $entreprise = Entreprise::factory()->create([
                'id' => $z,
                'user_id' => $user->id
            ]);

            $usr = Post::factory()->create([
                'entreprise_id' => $entreprise->id,
                'category_id' => $faim['id']
            ]);
    
            $usr = Post::factory()->create([
                'entreprise_id' => $entreprise->id,
                'category_id' => $soif['id']
            ]);
    
            $usr = Post::factory()->create([
                'entreprise_id' => $entreprise->id,
                'category_id' => $autre['id']
            ]);
            $z++;
        }
    }
}
