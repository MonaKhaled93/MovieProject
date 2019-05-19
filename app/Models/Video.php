<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'name' ,
        'des' ,
        'meta_des' ,
        'meta_keywords' ,
        'youtube' ,
        'user_id',
        'published',
        'image',
    ];

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }




}
