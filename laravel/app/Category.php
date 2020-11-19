<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public $table = 'categorys';
    public $primaryKey = 'id';
    public $guarded = [];


    public function products(){
      return $this->hasMany(Product::class,'id_category');
    }

    public function subcategorys(){
      return $this->hasMany(Subcategory::class,'id_category');
    }

    // -------------------scope-------------------
    public function scopeSearchCategory($query, $name){
      return $query->where('name', '=', $name);
    }

    // ----------------------get-------------------

    public function getCategorieAll(): string{
        $categorias = Category::all();
        return $categorias;
    }



}
