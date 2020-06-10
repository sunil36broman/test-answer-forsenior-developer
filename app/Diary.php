<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $table = 'diary_taken';

    protected $fillable = [
        'buyer_id', 'amount',
    ];
}
