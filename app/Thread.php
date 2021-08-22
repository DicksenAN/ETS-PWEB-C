<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{   
    // Tabel yang digunakan
    protected $table = 'threads';
    // Atribut yang fillable
    protected $fillable = ['question', 'body', 'user_id'];

    // Relation ke user
    public function user(){
        return $this->belongsTo('App\User');   
    }

    // Relation ke replies
    public function replies(){
        return $this->hasMany('App\Reply');
    }
}
