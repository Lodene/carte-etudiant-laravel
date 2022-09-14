<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Entreprise;
use App\Models\Post;
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
        
        Post::Create([
            'entreprise_id' => $entreprise[0]->id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[1]->id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[2]->id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[3]->id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[4]->id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[5]->id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[6]->id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[7]->id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[8]->id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[9]->id,
        ]);
    }
}
