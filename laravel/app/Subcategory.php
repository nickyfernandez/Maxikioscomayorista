<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
  public $table = 'subcategorys';
  public $primaryKey = 'id';
  public $guarded = [];

    public function category(){
      return $this->belongsTo(Category::class,'id_category');
    }
    public function products(){
      return $this->hasMany(Product::class,'id_subcategory');
    }

    // -------------------scope-------------------
    public function scopeSearchSubcategory($query, $name){
      return $query->where('name', '=', $name);
    }

}
