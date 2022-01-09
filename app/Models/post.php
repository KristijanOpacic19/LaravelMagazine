<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class post extends Model
{
    use HasFactory;
    use SoftDeletes;
    use \Conner\Tagging\Taggable;

    protected $table = "posts";
    protected $primaryKey = "pid";

    public function comments(){
        return $this->hasMany('App\Models\Comment')->orderBy('id','desc');
    }
    
}
