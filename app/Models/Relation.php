<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relation extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function posts(){
        return $this->belongsTo(Posts::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
