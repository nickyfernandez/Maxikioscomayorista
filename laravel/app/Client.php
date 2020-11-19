<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //

    public $table = 'clients';
    public $primaryKey = 'id_client';
    public $guarded = [];

    public function user(){
      return $this->belongsTo(User::class,'id_client');
    }
}
