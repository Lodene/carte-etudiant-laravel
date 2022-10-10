<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class EntrepriseControlleur extends Controller
{
    public function scope(User $id){
        
        if ($id->id == 0){
            return view('/entreprise/ajout');
        } else {
            $posts = app('App\Http\Controllers\EntrepriseControlleur')->findPost($id->id);
            // dd($posts);
            DB::table('relation')->insert(
                array(
                       'user_id'     =>   $id->id, 
                       'posts_id'   =>   $posts
                )
            );
            return view('/entreprise/ajout');
        }
    }

    public function findPost($id){
        $posts = Post::all()->where('entreprise_id', '=', $id); 
        dd(Post::all()->where('entreprise_id', '=', $id)); 
        return $posts;
    }
    
    public function target(){
        $test = request()->validate([
            'id' => 'required|min:1|max:5'
        ]);
        $usr = User::where('id', '=', $test['id'])->first();
        return view('/entreprise/ajout', [
            'usr' => $usr
        ]);
    }

    public function add(Entreprise $entreprise, User $usr){
        return view('/entreprise/ajout', [
            'entreprise' => $entreprise
        ]);
    }

    public function valider(User $usr){
            
            return view('/entreprise/valider', [
            'usr' => $usr
        ]);
    }
}
