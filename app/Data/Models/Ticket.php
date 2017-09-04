<?php

namespace App\Data\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'tickets';
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function sub_centre()
    {
        return $this->belongsTo(Sub_centre::class, 'sub_centre_id');
    }
    public function pop()
    {
        return $this->belongsTo(Pop::class, 'pop_id');
    }
}
