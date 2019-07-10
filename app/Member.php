<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    function message () {
        return $this->hasmany(Message::class, 'message_id');
    }
}
