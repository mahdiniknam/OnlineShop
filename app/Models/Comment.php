<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function commentable(){

        return $this->morphTo();
    }
}
