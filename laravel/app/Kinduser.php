<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kinduser extends Model
{
    //

    public $table = 'kindusers';
    public $primaryKey = 'id_kind';
    public $guarded = [];

    public function users(){
      return $this->hasMany(User::class,'id_kind');
    }


}
