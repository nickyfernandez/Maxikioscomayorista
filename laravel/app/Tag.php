<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public $table = 'tags';
    public $primaryKey = 'id_tag';
    public $guarded = [];



    // public function product(){
    //   return $this->belongsToMany(Product::class);
    //   // return $this->belongsToMany('App\Product','id_tag_product','id_tag','id_product');
    // }
}
