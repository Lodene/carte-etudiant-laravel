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
        // User::truncate();
        // Post::truncate();
        // Entreprise::truncate(); 

        // $user = User::factory(10)->create([
        //     'first_name' => Str::random(10),
        //     'last_name' => Str::random(10),
        // ]);

        
        $entreprise = Entreprise::factory(10)->create();
        
        Post::Create([
            'entreprise_id' => $entreprise[0]->entreprise_id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[1]->entreprise_id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[2]->entreprise_id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[3]->entreprise_id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[4]->entreprise_id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[5]->entreprise_id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[6]->entreprise_id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[7]->entreprise_id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[8]->entreprise_id,
        ]);

        Post::Create([
            'entreprise_id' => $entreprise[9]->entreprise_id,
        ]);
    }
}
