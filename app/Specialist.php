<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{

    protected $table = "specialists";
    protected $fillable = ['title' , 'description' , 'image'];

    public function getImageAttribute($image){
        return asset('uploads/specialists/images/'.$image);
    }

    public function scopeTitlesOnLY($query){
        return $query->pluck('title');
    }
}
