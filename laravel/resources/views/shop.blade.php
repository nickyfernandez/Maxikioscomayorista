@extends('layouts/cuadro')

@section('main')

    {{-- <div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Products</span></p>
            <h1 class="mb-0 bread">Products</h1>
          </div>
        </div>
      </div>
    </div> --}}
{{-- --------------------------------- --}}
    <br>
    <div class="container">
      <div class="d-flex justify-content-around">
        @if(Auth::user() && Auth::user()->admin)
          <nav class="content-center">
            <a href="/producto/new" class="btn btn-primary">Cargar nuevo</a>
          </nav>
          <nav class="content-center">
            <a href="/pasarprecios" class="btn btn-primary">Pasar precios</a>
          </nav>
        @endif

      </div>
    </div>
    <br>

    <div class="container">
      {{-- <div class="d-flex justify-content-around"> --}}
      <div class="d-flex justify-content-around flex-wrap">
        @if(!$categoriaActual)
          <nav class="content-center categoria">
            <a href="/productos" class="btn btn-danger">Todos</a>
          </nav>
        @else
          <nav class="content-center categoria">
            <a href="/productos" class="btn btn-primary">Todos</a>
          </nav>
        @endif
        @foreach ($categorias as $category)
          @if($category->name == $categoriaActual)
            <nav class="content-center categoria">
              <a href="/categorias/{{$category->name}}" id="cat{{$category->id}}" class="btn btn-danger">{{$category->name}}</a>
            </nav>
            @continue
          @endif
          <nav class="content-center categoria">
            <a href="/categorias/{{$category->name}}" id="cat{{$category->id}}" class="btn btn-primary">{{$category->name}}</a>
          </nav>
        @endforeach
      </div>    </div>
    <br>
    <div class="container">
      <div class="d-flex justify-content-around flex-wrap">
        @if($subcategorias)
          @foreach ($subcategorias as $subcategory)
            @if($subcategory->name == $subcategoriaActual)
              <nav class="content-center  categoria">
                <a href="/categorias/{{$categoriaActual}}/{{$subcategory->name}}" class="btn btn-danger">{{$subcategory->name}}</a>
              </nav>
              @continue
            @endif
              <nav class="content-center  categoria">
                <a href="/categorias/{{$categoriaActual}}/{{$subcategory->name}}" class="btn btn-success">{{$subcategory->name}}</a>
              </nav>
          @endforeach
        @endif
      </div>
    </div>
  <br>
  <div class="container">
    <div class="d-flex flex-row-reverse">
      <div class="dropdown" id="filtros1">
        <button class="btn btn-secondary dropdown-toggle" onclick="filtros();" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filtrar por
        </button>
        <div class="dropdown-menu" @if(Auth::user())id="filtros2" @endif aria-labelledby="dropdownMenuButton">
          @if($categoriaActual)
          {{-- @if($categoriaActual != "todos") --}}
            @if($subcategorias)
              <a id="fil1" class="dropdown-item" href="/filtro/alfa/{{$categoriaActual}}/{{$subcategoriaActual}}">Alfabeto</a>
              <a id="fil2" class="dropdown-item" href="/filtro/menorprecio/{{$categoriaActual}}/{{$subcategoriaActual}}">Menor precio</a>
              <a id="fil2" class="dropdown-item" href="/filtro/mayorprecio/{{$categoriaActual}}/{{$subcategoriaActual}}">Mayor precio</a>
              <a id="fil3" class="dropdown-item" href="/filtro/nove/{{$categoriaActual}}/{{$subcategoriaActual}}">Novedades</a>
            @else
              <a id="fil1" class="dropdown-item" href="/filtro/alfa/{{$categoriaActual}}">Alfabeto</a>
              <a id="fil2" class="dropdown-item" href="/filtro/menorprecio/{{$categoriaActual}}">Menor precio</a>
              <a id="fil2" class="dropdown-item" href="/filtro/mayorprecio/{{$categoriaActual}}">Mayor precio</a>
              <a id="fil3" class="dropdown-item" href="/filtro/nove/{{$categoriaActual}}">Novedades</a>
            @endif
            @else
            <a id="fil1" class="dropdown-item" href="/filtro/alfa">Alfabeto</a>
            <a id="fil2" class="dropdown-item" href="/filtro/menorprecio">Menor precio</a>
            <a id="fil2" class="dropdown-item" href="/filtro/mayorprecio">Mayor precio</a>
            <a id="fil3" class="dropdown-item" href="/filtro/nove">Novedades</a>
          @endif
          {{-- <a id="fil1" class="dropdown-item" href="">Alfabeto</a> --}}
          {{-- <a id="fil2" class="dropdown-item" href="">Precio</a>
          <a id="fil3" class="dropdown-item" href="">Novedades</a> --}}
        </div>
      </div>
    </div>
  </div>
<br>
    <div class="container">
      <div class="d-flex justify-content-around">

          <nav class="content-center">
            {{$productos->links()}}
          </nav>

      </div>
    </div>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row">

          @foreach ($productos as $producto)

            			<div class="col-md-6 col-lg-3 ftco-animate">
            				<div class="product">
                      <div class="text py-3 pb-4 px-3 text-center">
                        <div class="bottom-area-left d-flex px-3 ">
                          <div class="m-auto d-flex justify-content-end">
                            @if(Auth::user())
                            <a href="" class="add-to-cart d-flex justify-content-center align-items-center text-center">

                              <span><i class="ion-ios-heart"></i></span>
                            </a>
                            @endif
                          </div>
                        </div>
                      </div>

                      @if ($producto->avatar)
                        <a  class="img-prod"><img class="img-fluid" src="/storage/{{$producto->avatar}}" alt="Colorlib Template">
              						{{-- <span class="status">30%</span> --}}
                          {{-- descuento --}}
              						<div class="overlay"></div>
                          {{-- mantener tamaño --}}
              					</a>
                      @else
              					<a  class="img-prod"><img class="img-fluid" src="/images/defaut.jpg" alt="Colorlib Template">
              						{{-- <span class="status">30%</span> --}}
                          {{-- descuento --}}
              						<div class="overlay"></div>
                          {{-- mantener tamaño --}}
              					</a>
                      @endif

                      <div class="bottom-area d-flex px-3">
                        <div class="m-auto d-flex ">
                          <p>
                            <span class="price-sale1">Total:</span>
                            <span class="price-sale1">$</span>
                            <span id="cua2{{$producto->id}}" class="price-sale1">{{$producto->price}}</span>
                          </p>
                        </div>
                      </div>

            					<div class="text py-3 pb-4 px-3 text-center">
                        <?php $str = strlen($producto->name); ?>
                        @if ($str >= 10)
                          <p class="price-sale4">{{$producto->name}}</p>
                        @else
                          <p class="price-sale3">{{$producto->name}}</p>
                        @endif
            						<div class="d-flex">
            							<div class="pricing">
        		    						<p class="price"><span class="price-sale2">$ {{$producto->price}}</span></p>
                            {{-- <p class="price"><span class="mr-2 price-dc">{{$producto->price}}</span><span class="price-sale">{{$producto->price}}</span></p> --}}
        		    					</div>
        	    					</div>
                      <form class="row" action="/compra/{{$producto->id}}" method="post">
                        @csrf
                        @if (Auth::user())
                          <input type="hidden" value="{{Auth::user()->id}}" name="usuario" >
                        @else
                          <input type="hidden" value="0" name="usuario" >
                        @endif
                        <input type="hidden" class="form-control @error('producto') is-invalid @enderror"  value="{{$producto->price}}" name="price" >
                        <input type="hidden" class="form-control @error('producto') is-invalid @enderror"  value="{{$producto->stock}}" name="stock" >
                        {{-- <input type="hidden" value="{{$producto->ip}}" name="id" > --}}
                        <span class="invalid-feedback" role="alert">
                          <strong>@error('id') {{ $message }} @enderror</strong>
                        </span>
        	    					<div class="bottom-area d-flex px-3">
        	    						<div class="m-auto d-flex ">
        	    							<a href="/productos/{{$producto->id}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">
        	    								{{-- <span><i class="ion-ios-menu"></i></span> --}}
                              <span><i class="ion-ios-search"></i></span>
        	    							</a>
        	    							<a id="menos" onclick="cantidad('{{$producto->id}}',-1,{{$producto->stock}},{{$producto->price}});" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-remove"></i></span>
        	    							</a>
                            {{-- <button type="button" onclick="cantidad('{{$producto->id}}');" class="buy-now d-flex justify-content-center align-items-center mx-1"><span><i class="ion-ios-remove"></i></span></button> --}}
                            {{-- <input id="pro{{$producto->id}}" name="quantity" type="text"  value=1 readonly> --}}

        	    							<a id="pro{{$producto->id}}"  class="heart d-flex justify-content-center align-items-center" value='1' >1 	</a>
                            <input type="hidden" id="cua{{$producto->id}}"  class="heart d-flex justify-content-center align-items-center" value='1' name="quantity" >
        	    								{{-- <span><label id="proCantidad" value="3"></label></span>
                              <input type="hidden" value="1" name="quantity" > --}}
                              {{-- <p id="pro{{$producto->id}}" class="heart d-flex justify-content-center align-items-center">3
                              </p> --}}
                            <a id="mas" onclick="cantidad('{{$producto->id}}',1,{{$producto->stock}},{{$producto->price}});" class="buy-now d-flex justify-content-center align-items-center mx-1">
        	    								<span><i class="ion-ios-add"></i></span>
        	    							</a>
            							</div>
            						</div>
            					</div>
                      <br>
                      <div class="text py-3 pb-4 px-3 text-center">
                        <div class="bottom-area d-flex px-3">
                          <div class="m-auto d-flex ">
                            @if(Auth::user() && Auth::user()->admin)
                            <a href="/eliminar/{{$producto->id}}" class="add-to-cart d-flex justify-content-center align-items-center text-center">

                              <span><i class="ion-ios-trash"></i></span>
                            </a>
                            @endif

                            {{-- <button type="button" name="button" class="btn btn-black py-1 px-5"><i class="ion-ios-cart"></i></button> --}}
                            <input class="btn btn-primary py-3 px-5" type="submit" value="Comprar">

                          </div>
                        </div>
                      </div>
                    </form>
                    {{-- botones --}}

            				</div>
            			</div>


          @endforeach

    	</div>
    </section>

{{-- --------------------------------------------- --}}
    <div class="container">
      <div class="d-flex justify-content-around">

          <nav class="content-center">
            {{$productos->links()}}
          </nav>

      </div>
    </div>
    <br>

  @endsection
