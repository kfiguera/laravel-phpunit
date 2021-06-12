<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;
    //Mutators
    public function setNameAttribute($value){
        return $this->attributes['name'] = Str::lower($value);
    }

    //Accessors
    public function getSlugAttribute($value){
        return Str::replace(' ','-',$this->name);
    }
}
