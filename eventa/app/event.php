<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    //

    protected $table = 'events';

    public $primaryKey = 'id';

    public $timestamp = true;

    public function user(){
        
        return $this->belongsTo('App\User');
    }
    
}
