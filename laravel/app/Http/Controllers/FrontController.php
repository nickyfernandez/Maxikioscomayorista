<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
use App\Product;

class FrontController extends Controller
{
    //

    public function searchCategory($name){

      $category = Category::SearchCategory($name)->first();
      $productos = $category->products()->paginate(16);

      // $subcategory = Subcategory::SearchSubcategory($category)->first();

      $subcategorias = $category->subcategorys()->get();
      // dd($subcategorias);

      $categorias = Category::all();
      $categoriaActual = $category->name;
      $subcategoriaActual = null;

      return view('shop')->with('productos', $productos)->with('categorias', $categorias)->with('subcategorias', $subcategorias)->with('categoriaActual', $categoriaActual)->with('subcategoriaActual', $subcategoriaActual);

    }

    public function searchSubcategory($name, $subname){

      $category = Category::SearchCategory($name)->first();
      $subcategory = Subcategory::SearchSubcategory($subname)->first();

      $productos = $subcategory->products()->paginate(16);

      // $subcategory = Subcategory::SearchSubcategory($category)->first();

      $subcategorias = $category->subcategorys()->get();
      // dd($subcategorias);

      $categorias = Category::all();
      $categoriaActual = $category->name;
      $subcategoriaActual = $subcategory->name;

      return view('shop')->with('productos', $productos)->with('categorias', $categorias)->with('subcategorias', $subcategorias)->with('categoriaActual', $categoriaActual)->with('subcategoriaActual', $subcategoriaActual);

    }


    public function search(Request $req){
      // dd($req->name);

      $name = $req->get('name');
      $productos = Product::orderBy('id','DESC')
          ->name($name)
          ->paginate(16);
      // dd($busqueda);
      $categorias = Category::all();
      $categoriaActual = null;
      $subcategoriaActual = null;
      $subcategorias = null;

      return view('shop')->with('productos', $productos)->with('categorias', $categorias)->with('subcategorias', $subcategorias)->with('categoriaActual', $categoriaActual)->with('subcategoriaActual', $subcategoriaActual);

    }

    public function filter($filter){
      switch ($filter) {
        case 'alfa':
        $productos = Product::orderBy('name','asc')
        ->paginate(16);
          break;
        case 'menorprecio':
          $productos = Product::orderBy('price','asc')
          ->paginate(16);
            break;
        case 'mayorprecio':
          $productos = Product::orderBy('price','desc')
          ->paginate(16);
            break;
        case 'nove':
          $productos = Product::orderBy('created_at','asc')
          ->paginate(16);
            break;
        default:
        $url = url()->previous();

        return redirect($url);
          break;
      }
      $categorias = Category::all();
      $categoriaActual = null;
      $subcategorias = null;
      $subcategoriaActual = null;
      return view('shop')->with('productos', $productos)->with('categorias', $categorias)->with('subcategorias', $subcategorias)->with('categoriaActual', $categoriaActual)->with('subcategoriaActual', $subcategoriaActual);

    }

    public function filter2($filter,$name ){
      switch ($filter) {
        case 'alfa':
        $category = Category::SearchCategory($name)->first();
        $productos = $category->products()->orderBy('name','asc')
        ->paginate(16);

          break;
        case 'menorprecio':
        $category = Category::SearchCategory($name)->first();
        $productos = $category->products()->orderBy('price','asc')
          ->paginate(16);
            break;
        case 'mayorprecio':
        $category = Category::SearchCategory($name)->first();
        $productos = $category->products()->orderBy('price','desc')
          ->paginate(16);
            break;
        case 'nove':
        $category = Category::SearchCategory($name)->first();
        $productos = $category->products()->orderBy('created_at','desc')
          ->paginate(16);
            break;
        default:
        $url = url()->previous();

        return redirect($url);
          break;
      }

      $subcategorias = $category->subcategorys()->get();
      $categorias = Category::all();
      $categoriaActual = $category->name;
      $subcategoriaActual = null;

      return view('shop')->with('productos', $productos)->with('categorias', $categorias)->with('subcategorias', $subcategorias)->with('categoriaActual', $categoriaActual)->with('subcategoriaActual', $subcategoriaActual);

    }


    public function filter3($filter,$name , $subname){
      switch ($filter) {
        case 'alfa':
        $category = Category::SearchCategory($name)->first();
        $subcategory = Subcategory::SearchSubcategory($subname)->first();
        $productos = $subcategory->products()->orderBy('name','asc')
        ->paginate(16);
          break;
        case 'menorprecio':
        $category = Category::SearchCategory($name)->first();
        $subcategory = Subcategory::SearchSubcategory($subname)->first();
        $productos = $subcategory->products()->orderBy('price','asc')
          ->paginate(16);
            break;
        case 'mayorprecio':
        $category = Category::SearchCategory($name)->first();
        $subcategory = Subcategory::SearchSubcategory($subname)->first();
        $productos = $subcategory->products()->orderBy('price','desc')
          ->paginate(16);
            break;
        case 'nove':
        $category = Category::SearchCategory($name)->first();
        $subcategory = Subcategory::SearchSubcategory($subname)->first();
        $productos = $subcategory->products()->orderBy('created_at','desc')
          ->paginate(16);
            break;
        default:
        $url = url()->previous();

        return redirect($url);
          break;
      }

      $subcategorias = $category->subcategorys()->get();
      $categorias = Category::all();
      $categoriaActual = $category->name;
      $subcategoriaActual = $subcategory->name;

      return view('shop')->with('productos', $productos)->with('categorias', $categorias)->with('subcategorias', $subcategorias)->with('categoriaActual', $categoriaActual)->with('subcategoriaActual', $subcategoriaActual);

    }

}
