<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Token extends Model
{

    protected $fillable = [
        'user_id',
        'lifeToken',
        'token',
    ];

    public function users(){
        return $this -> belongsTo(User::class , 'user_id', 'id' );
    }
}
