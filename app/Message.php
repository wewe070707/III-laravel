<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    function Member () {
        return $this->hasone(Member::class, 'id');
    }
}
