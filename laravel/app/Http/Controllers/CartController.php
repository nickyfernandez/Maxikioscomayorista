<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Auth;
use App\Cart;
use App\User;
use App\Product;
use App\Category;
use App\Local;
use App\Currency;
use App\PaymentPlatform;




class CartController extends Controller
{
    //

  public function listado(){
      $id_user = Auth::user()->first();
      $usercarts = User::SearchCart($id_user->id)->first();
      $carritos = $usercarts->carts()->get();

      foreach ($carritos as $carrito) {
        $producto = Product::find($carrito->id_product);
        // dd($producto);
        if ($producto->price != $carrito->price) {
          $arregloPrecio = Cart::find($carrito->id);
          $arregloPrecio->price = $producto->price;
          $arregloPrecio->save();
        }
      }

      $productos = $usercarts->carts()->get();
      $currencies = Currency::all();
      $paymentPlatforms = PaymentPlatform::all();


      return view('cart')->with('productos', $productos)->with('currencies', $currencies)->with('paymentPlatforms', $paymentPlatforms);
  }


  public function add(Request $req){

    // dd($req["id"]);
    if ($req["usuario"]==0){
      return redirect("/login");
    }else{

      $reglas = [
        "avatar" => "file",
      ];

      $mensajes = [
        "file" => "El archivo no es una imagen",
      ];

      $this->validate($req, $reglas, $mensajes);

      $id_user = Auth::user()->first();
      $usercarts = User::SearchCart($id_user->id)->first();
      $carritos = $usercarts->carts()->get();
      $productoRepetido = 'no';
      foreach ($carritos as $carrito) {
        // $producto = Product::find($carrito->id_product);
        // dd($producto);
        if ($req["id"] == $carrito->id_product && $carrito->deleteit != 1) {
          $sumarProducto = Cart::find($carrito->id);
          $sumarProducto->quantity = $sumarProducto->quantity + $req["quantity"];
          $sumarProducto->save();
          $productoRepetido = 'si';
        }
      }

      if ($productoRepetido != 'si') {

      $productonuevo = new Cart();
      $productonuevo->id_user = $req["usuario"];
      $productonuevo->id_product = $req["id"];
      // mal, no se debe copiar precio del producto debido a que si lo agrego hace 10 años, va a tener el precio de hace 10 años
      // cambiar precio por precioviejo
      $productonuevo->price = $req["price"];
      $productonuevo->quantity = $req["quantity"];

      $detalle = Product::find($req["id"]);
      $productonuevo->avatar = $detalle->avatar;


      $productonuevo->save();
    }


      $url = url()->previous();

      return redirect($url);

      // return javascript:history.go(-1);

      // return back()->withInput();

      // Redirect::back()

      // return redirect("javascript:history.go(-1)");

      // <a href="{{ route('clientes', array('cliente' => $cliente->id, 'page' => Input::get('page'))) }}">&laquo; Volver</a>
      // return redirect("/")->with('nombreproducto', $nombreproducto);
    }

  }



  public function cancel($id){

    $compra = Cart::find($id);

    $compra->deleteit = 1;

    $compra->save();

    return redirect("/carrito");
  }


  // public function pedido(){
  //
  //   $productos = Cart::all();
  //
  //   foreach ($productos as $producto) {
  //     if ($producto->id_user == (Auth::user()->id)) {
  //       if ($producto->deleteit == 1) {
  //         continue;
  //       }
  //       if ($producto->buyit == 1) {
  //         continue;
  //       }
  //
  //
  //       $productonuevo = new Pedido();
  //       $productonuevo->id_user = $req["usuario"];
  //       $productonuevo->id_product = $req["id"];
  //       $productonuevo->price = $req["price"];
  //       $productonuevo->quantity = $req["quantity"];
  //
  //
  //     }
  //
  //   }
  //
  //   return view('cart', $vac);
  // }
  //

  public function mas($id){

    $agregar = Cart::find($id);
    $maxstock = Product::find($agregar->id_product);
      if($maxstock->stock == $agregar->quantity){

        // alerta de que no tiene suficiente stock
      }else{

        $agregar->quantity = $agregar->quantity + 1;

        $agregar->save();

      }
      return redirect("/carrito");
  }

  public function menos($id){

      $sacar = Cart::find($id);
      if ($sacar->quantity > 1) {

      $sacar->quantity = $sacar->quantity - 1;

      $sacar->save();

    // }else{
    //   return redirect("/carrito/$id");
    }

    return redirect("/carrito");
  }



}
