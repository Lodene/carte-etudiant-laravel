<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory; 


    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    
}