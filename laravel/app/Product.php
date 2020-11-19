<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    //
    public $table = 'products';
    public $primaryKey = 'id';
    public $guarded = [];

    // public function tag(){
    //   return $this->belongsToMany(Tag::class);
    //   // return $this->belongsToMany('App\tag','id_tag_product',id_product','id_tag');
    // }

    // public function category(){
    //   // return $this->belongTo('App\Tipo','id_kind');
    //   return $this->belongsTo('App\Category','category_id');
    // }

    public function category(){
      // return $this->belongTo('App\Tipo','id_kind');
      return $this->belongsTo(Category::class,'id_category');
    }

    public function subcategory(){
      // return $this->belongTo('App\Tipo','id_kind');
      return $this->belongsTo(Subategory::class,'id_subcategory');
    }

    public function carts(){
      // return $this->belongTo('App\Tipo','id_kind');
      return $this->belongsToMany(Cart::class,'products_carts','id_product','id_cart');
    }


    // public function local(){
    //   // return $this->belongTo('App\Tipo','id_kind');
    //   return $this->belongTo('App\local');
    // }
    //
    // public function cart(){
    //   // return $this->belongTo('App\Tipo','id_kind');
    //   return $this->belongTo('App\cart');
    // }

    // public function user(){
    //   // return $this->belongTo('App\Tipo','id_kind');
    //   return $this->belongTo('App\User');
    // }
    //
    // public function users(){
    //   // return $this->belongsToMany("App\User","mi_carrito","candy_id","user_id" );
    //   return $this->belongsToMany(User::class);
    //   // hacer table intermeda
    // }

    // ------------------scope---------------------

    public function scopeName($query, $name){
      // dd($name);
      // $query->where('name', $name);
      if($name)
      return $query->where('name','LIKE', "%$name%");
    }

    // ---------------------get---------------------

    public function getCategorieName(): string{
      // if($this->id_category){
      if($this->id){
        $category = Category::find($this->id);
        // $category = Category::find($this->id_category);
        return $category->name;
      }
      return "Sin Categoria";
    }

    public function getLocalName(): string{
      // if($this->id_local){
      if($this->id){
        // $local = Local::find($this->id_local);
        $local = Local::find($this->id);
        return $local->local;
      }
      return "Sin Local";
    }

    public function getCategorieAll(): string{
        $categorias = Category::all();
        return $categorias;
      }

      // public function getStock(){
      //
      //     $stock = Product::find($this->id);
      //
      //
      //     return $stock->stock;
      //
      //
      // }

}
