<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = array('title', 'body');

    public function comments(){
        return $this->hasMany(Comment::class);
    }


    function addComment($body){
        Comment::create(array(
            'body'  =>  $body,
            'post_id'   =>  $this->id
        ));
    }
}
