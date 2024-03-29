<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = ['operatingSystem', 'status', 'issue', 'description'];

    public function user(){
        return $this->belongsTo('App\User', 'userEmail');
    }

    public function comment(){
        return $this->hasMany('App\Comment', 'id');
    }
}
