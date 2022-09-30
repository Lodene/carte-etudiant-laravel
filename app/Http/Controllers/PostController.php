<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PostController extends Controller{
    public function index(){
        $posts = Post::latest();    
        // $posts = DB::table('posts')->orderBy('posts.level', 'desc');
        if (request('search')){
            $posts = $posts->leftJoin('entreprises', 'entreprises.id', '=', 'posts.entreprise_id')
                ->select('posts.*', 'entreprises.name')
                ->where('name', 'like', '%' . request('search') . '%');
        }
        // dd(request('category') );
        $category =  DB::table('categories');
        if (request('category') && request('category') != null && request('category') != 4){
            $posts = $posts->where('category_id', '=', request('category'));
        } 

        $usr = User::where('grade', '=', 'entreprise');
        return view('posts', [
            'posts' => $posts->get(),
            'categories' => $category->get(),
            'usr' => $usr->get()
        ]);
    }

    public function post(Post $post){
        return view('post', [
            'post' => $post
        ]);
    }
}
