<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    Protected $fillable = [
        'user_id'
    ];

    public function detail()
    {
        return $this->hasMany('App\TransactionDetail');
    }
}
