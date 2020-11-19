<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  public $table = 'carts';
  public $primaryKey = 'id';
  public $guarded = [];


  public function user(){
    return $this->belongsTo(User::class,'id_user');
  }
  public function products(){
    // return $this->belongTo('App\Tipo','id_kind');
    return $this->hasMany(Product::class,'products_carts','id_cart','id_product');
  }
  // public function products(){
  //   return $this->hasMany(Product::class,'id_product');
  // }

  // --------------get---------------------
  public function getProductName(): string{
    if($this->id_product){
      $product = Product::find($this->id_product);
      if ($product) {

        return $product->name;
      }
      return "Producto borrado";
    }
    return "Sin Nombre";
  }
  public function getProductDescripcion(): string{
    if($this->id_product){
      $product = Product::find($this->id_product);
      if ($product) {
        return $product->descripcion;
      }
      return "Producto borrado";
    }
    return "Sin Nombre";
  }

  public function getNoProduct(): string{
    if($this->id_product){
      $product = Product::find($this->id_product);
      if ($product) {
        return "1";
      }
      return "0";
    }
    return "0";
  }

}
